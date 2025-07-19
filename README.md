

# 📡 ZenoAPI SMS Platform – API Documentation

ZenoAPI enables you to send branded SMS messages using your **approved Sender ID** to one or multiple recipients with a simple RESTful API.

---

## 🌍 Base URL

```
https://zenoapi.com
```

All requests are made relative to this base URL.

---

## 🔐 Authentication

All endpoints require this header:

| Key            | Value               |
| -------------- | ------------------- |
| `x-api-key`    | `your_api_key_here` |
| `Content-Type` | `application/json`  |

---

## 🪪 1. Request a Sender ID

Sender IDs are required to brand your messages (e.g., `ZENOPAY`, `SOKABET`, `BANKSMS`).

### 📥 Endpoint

```
POST /api/sms/sender-ids/
```

### 📝 Request Body

```json
{
  "sender_id": "Sokabet",
  "description": "Betting Platform"
}
```

| Field       | Type   | Description                                   |
| ----------- | ------ | --------------------------------------------- |
| sender\_id  | string | Max 11 characters, no spaces, e.g., `Sokabet` |
| description | string | Short reason for using the sender ID          |

### ✅ Sample Response

```json
{
  "status": "success",
  "message": "Sender ID request submitted successfully",
  "data": {
    "sender_id": "Sokabet",
    "status": "pending"
  }
}
```

> ⚠️ **Note**: Approval is required before using a Sender ID to send SMS.

---

## 📩 2. Send Single SMS

Send a single message to one recipient using your approved Sender ID.

### 📥 Endpoint

```
POST /api/sms/send/
```

### 📝 Request Body

```json
{
  "recipient": "255713570435",
  "message": "Your message here",
  "sender_id": "Sokabet",
  "message_type": "alert"
}
```

| Field         | Type   | Description                                            |
| ------------- | ------ | ------------------------------------------------------ |
| recipient     | string | Phone number in international format (e.g., `2557...`) |
| message       | string | Text content of the SMS                                |
| sender\_id    | string | Your **approved** Sender ID                            |
| message\_type | string | `alert` or `marketing`                                 |

### ✅ Sample Response

```json
{
  "status": "success",
  "message": "Message sent successfully",
  "data": {
    "recipient": "255713570435",
    "status": "delivered",
    "message_id": "a2f5b1b8-1f9d-4239-a980-7d0e6a7e9b1e"
  }
}
```

---

## 📤 3. Send Bulk SMS

Send the same SMS message to multiple phone numbers.

### 📥 Endpoint

```
POST /api/sms/bulk/
```

### 📝 Request Body

```json
{
  "recipients": [
    "255713570435",
    "255652449389",
    "255714027079"
  ],
  "message": "Beti kirahisi na ushinde na Sokabet",
  "sender_id": "Sokabet",
  "message_type": "alert"
}
```

| Field         | Type   | Description                                   |
| ------------- | ------ | --------------------------------------------- |
| recipients    | array  | List of phone numbers in international format |
| message       | string | SMS text content                              |
| sender\_id    | string | Your **approved** Sender ID                   |
| message\_type | string | `alert` or `marketing`                        |

### ✅ Sample Response

```json
{
  "status": "success",
  "message": "Messages sent successfully",
  "data": {
    "batch_id": "e04a93dc-b721-44d9-a62e-4d67ab1ff3e9",
    "total": 3,
    "sent": 3
  }
}
```

---

## ⚠️ Important Guidelines

* Use **E.164 format** for all phone numbers (e.g., `2557XXXXXXXX`)
* Sender ID must be **approved** before using in messages
* `message_type: marketing` requires user **opt-in**
* Remove duplicate numbers to avoid extra costs

---

## 🧪 Test Your Integration

Use tools like **Postman** or **curl** to test your integration with `x-api-key` in headers.

---

## 🧰 Example with `curl`

```bash
curl -X POST https://zenoapi.com/api/sms/send/ \
  -H "x-api-key: your_api_key_here" \
  -H "Content-Type: application/json" \
  -d '{
        "recipient": "255713570435",
        "message": "Hello from ZenoAPI",
        "sender_id": "ZENOPAY",
        "message_type": "alert"
      }'
```

---

## 📞 Support

Need assistance or Sender ID approval?

* 📱 [WhatsApp Support](https://wa.me/255793166166)
* 📧 Email: `support@zenoapi.com`
* 🌐 Website: [https://zenoapi.com](https://zenoapi.com)

---

Would you like this exported as a downloadable `README.md` file?
