## Learning CSP
Learning CSP policies to check understanding

Defining and using various CSP policies  
Key things to note:     
Security critical:  
Why do we have 'unsafe-inline' as a policy ?   
If we have 'nonce' in place then use that, our pages should not load any in-line scripts. It is just a fall back option if the browser does not support CSP-2 or above  

Other:   
If 'strict-dynamic' is been used it would use sources passed only with 'nonce' and would not look for any of the whitelisted URIs or self   
If 'strict-dynamic'  is not supported on browsers like Safari then it would fall back to either 'nonce' for loading scripts or scripts from whitelisted URIs   

I believe the issue we have with the JIRA is more of a second case so my suggestion would be check   
All the whitelisted URIs (since it is a fallback option)   
Keep the value of hash between quotes ''   
Check what scripts do we need to target in order to trigger the pendo script and are they part of whitelisted URIs or not   



You might already know these however you could trust using these as your checker for CSP policy   
https://csp-evaluator.withgoogle.com/ and  
https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/script-src