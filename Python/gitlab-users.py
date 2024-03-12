import requests
import pandas as pd
from datetime import datetime
from openpyxl import Workbook

# Fetch recent users from GitLab
GITLAB_URL = "https://git.selfmade.ninja"
TOKEN = "selfmade.ninja.H76Z9x7yy2Jd3NfYbcR7"  # Replace with your actual token
HEADERS = {
    "Private-Token": TOKEN
}

def get_recent_users(url, headers, start_date, end_date):
    all_users = []
    for page in [1,2,3,4,5]:  # from 1 to 5 page no.
        response = requests.get(
            f"{url}/api/v4/users",
            headers=headers,
            params={"per_page": 100, "page": page}
        )
        response.raise_for_status()
        users = response.json()
        if isinstance(data, dict) and 'message' in data and isinstance(data['message'], dict):
            return data['message'].get("has_access", False)
        elif isinstance(data, dict):
            # Directly check if 'has_access' is in data if 'message' key is not present
            return data.get("has_access", False)
        else:
            # Log unexpected format of data
            print(f"Unexpected data format: {data}")
            return False
    else:
        print(f"Failed to check access for {email}: {response.status_code}")
        return False


# Define date range for user account creation
start_date = datetime(2023,11,28)  # Year, Month, Day
end_date = datetime(2024, 2, 29)

# Fetch users and filter by creation date
users = get_recent_users(GITLAB_URL, HEADERS, start_date, end_date)
