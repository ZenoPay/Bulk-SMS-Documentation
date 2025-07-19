
---

# 📡 ZenoAPI SMS Platform – API Documentation

ZenoAPI allows you to send **branded SMS messages** using your approved **Sender ID** to one or multiple recipients via a simple RESTful API.

---

## 🌍 Base URL

```
https://zenoapi.com
```

All endpoints are relative to this base URL.

---

## 🔐 Authentication

All API requests must include the following headers:

| Header         | Value               |
| -------------- | ------------------- |
| `x-api-key`    | `your_api_key_here` |
| `Content-Type` | `application/json`  |

---

## 🪪 1. Request a Sender ID

To send branded SMS, you need an **approved Sender ID** (e.g., `ZENOPAY`, `SOKABET`, `BANKSMS`).

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

| Field       | Type   | Description                                    |
| ----------- | ------ | ---------------------------------------------- |
| sender\_id  | string | Max 11 characters, no spaces (e.g., `Sokabet`) |
| description | string | Brief reason for using this Sender ID          |

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

### 📄 View Your Sender IDs

```
GET /api/sms/sender-ids/
```

#### Sample Response:

```json
[
  {
    "sender_id": "Sokabet",
    "verification_status": "approved",
    "created_at": "2025-04-30T08:24:10Z"
  },
  {
    "sender_id": "Mpira",
    "verification_status": "pending",
    "created_at": "2025-05-24T07:55:29Z"
  }
]
```

> ⚠️ **Note:** Your Sender ID must be **approved** before it can be used to send SMS.

---

## 📩 2. Send a Single SMS

Send a single SMS message to one recipient using an approved Sender ID.

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

| Field         | Type   | Description                                      |
| ------------- | ------ | ------------------------------------------------ |
| recipient     | string | Recipient’s phone number in international format |
| message       | string | Message content                                  |
| sender\_id    | string | Your approved Sender ID                          |
| message\_type | string | Either `alert` or `marketing`                    |

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

Send a message to multiple recipients at once using the same message body.

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

| Field         | Type   | Description                                             |
| ------------- | ------ | ------------------------------------------------------- |
| recipients    | array  | List of recipient phone numbers in international format |
| message       | string | Message content                                         |
| sender\_id    | string | Your approved Sender ID                                 |
| message\_type | string | Either `alert` or `marketing`                           |

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

## ⚠️ Usage Guidelines

* ✅ Use **E.164 format** for all phone numbers (e.g., `2557XXXXXXX`)
* ✅ Sender ID **must be approved** before use
* ✅ `message_type: marketing` requires **user opt-in**
* 🚫 Avoid sending the same number more than once to reduce costs

---

## 🧪 Testing Your Integration

You can test using tools like:

* [Postman](https://www.postman.com/)
* `curl` (see example below)

---

## 🧰 Example `curl` Request

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

Need help or Sender ID approval?

* 💬 [Chat on WhatsApp](https://wa.me/255793166166)
* 📧 Email: [support@zenoapi.com](mailto:support@zenoapi.com)
* 🌐 Website: [https://zenoapi.com](https://zenoapi.com)

---