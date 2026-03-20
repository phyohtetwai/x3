Title
Reflected Cross-Site Scripting (XSS) in Admin Panel Search Function

Summary
A reflected Cross-Site Scripting (XSS) vulnerability was identified in the admin panel of X3 Photo Gallery within the ajax_show_filemanager.php endpoint. The vulnerability occurs when user-supplied input from the `search` parameter is reflected in the server response without proper sanitization or output encoding.

This allows arbitrary JavaScript to execute in the browser of an authenticated administrator when the vulnerable search functionality is used.

Vulnerable Endpoint
POST /panel/ajax_show_filemanager.php

Vulnerable Parameter
search

Vulnerability Type
Reflected Cross-Site Scripting (XSS)

Related Weaknesses
CWE-79: Improper Neutralization of Input During Web Page Generation (Cross-site Scripting)
CWE-1004: Sensitive Cookie Without HttpOnly Flag

Affected Versions
X3 Photo Gallery <= X3.34.2

Impact
An attacker may inject malicious JavaScript into the search parameter of the vulnerable endpoint.

When an authenticated administrator performs a search operation that includes the injected payload, the script is executed in the administrator's browser.

Because the application exposes the PHPSESSID cookie to client-side JavaScript (missing the HttpOnly attribute), the script may access session cookies using document.cookie. This may increase the potential impact of the vulnerability.

Attack Prerequisites
- The attacker must be able to inject a malicious payload into the search parameter.
- The payload executes when an authenticated administrator performs the search request.
- The vulnerable endpoint is accessible within the administrative panel context.

Proof of Concept (PoC)

Step 1 — Send the following request:

POST /panel/ajax_show_filemanager.php HTTP/1.1
Host: example.com
Content-Type: application/x-www-form-urlencoded

showFilemanager=1&root=0&my_dir_path=../content/index&sort_type=name&page=1&countShow=all&have_action=no&search=<script>alert(document.cookie)</script>

(PoC Image)
<img width="1920" height="902" alt="request_xss_poc" src="https://github.com/user-attachments/assets/f6231032-998e-4a2d-bc7e-3938378699b5" />
<img width="1902" height="979" alt="xss_code_on_web" src="https://github.com/user-attachments/assets/2e081fde-3804-4763-a135-ac6ae3ec217e" />


Step 2 — The injected JavaScript executes when the response is rendered in the administrator's browser.

Example:

<script>alert(document.cookie)</script>

(PoC Image)
<img width="1919" height="988" alt="session_cookie_alert" src="https://github.com/user-attachments/assets/dac26bdc-c929-4280-b4cf-a5194aa0ba76" />


Root Cause
1. User input from the `search` parameter is reflected in the response without proper sanitization or output encoding.
2. The PHP session cookie (PHPSESSID) is not configured with the HttpOnly security attribute.

Recommended Fix

1. Apply proper output encoding before reflecting user input:

htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

2. Harden session cookies by enabling secure attributes:

session_set_cookie_params([
 'httponly' => true,
 'secure' => true,
 'samesite' => 'Lax'
]);
session_start();

3. Additional security improvements:
- Implement Content Security Policy (CSP)
- Validate and sanitize user input
- Apply security headers

Suggested CVSS v3.1 Vector
CVSS:3.1/AV:N/AC:L/PR:H/UI:R/S:U/C:L/I:L/A:N
Score: 4.8 (Medium)

Disclosure Timeline
2026-03-16 — Vulnerability discovered
2026-03-16 — Vendor notified via GitHub Security Advisory

Researcher
B14CK D3V1L
Security Researcher
