import requests

# Define the URL of the target website
url = "http://localhost/0b2d35c3bee24e4ce593597e33587624/"

# Define a list of common directories and admin panel paths to check
paths = ["admin", "wp-admin", "login", "cgi-bin", "test", "admin.php", "login.php", "admin/index.php", "admin/login.php", "wp-login.php"]

# Loop through each path and check if it exists on the target website
for path in paths:
    # Build the full URL for the current path with .php extension
    full_url = url + "/" + path + ".php"
    
    # Send a request to the current path
    response = requests.get(full_url)
    
    # Check the response code to determine if the path exists
    if response.status_code == 200:
        if path in paths:
            print("Directory found:", full_url)
        else:
            print("Admin panel found:", full_url)