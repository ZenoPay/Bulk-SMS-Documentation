import requests

url = "https://zenoapi.com/api/sms/sender-ids/"
headers = {
    "x-api-key": "your_api_key_here",
    "Content-Type": "application/json"
}
data = {
    "sender_id": "Sokabet",
    "description": "Betting Platform"
}

response = requests.post(url, json=data, headers=headers)
print(response.json())
