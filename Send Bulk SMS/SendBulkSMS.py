bulk_data = {
    "recipients": ["255713570435", "255652449389", "255714027079"],
    "message": "Promosheni ya Sokabet inaendelea!",
    "sender_id": "Sokabet",
    "message_type": "marketing"
}

response = requests.post("https://zenoapi.com/api/sms/bulk/",
                         headers=headers, json=bulk_data)
print(response.json())
