# HNG12 Stage 0 Backend Task: Public API

## Overview

This project is a public API developed as part of the **HNG12 Internship Stage 0 Backend Task**. The API provides the following information in JSON format:

- Registered email address: `samspike46@gmail.com`
- Current datetime in ISO 8601 format (UTC)
- GitHub repository URL: [https://github.com/samsmithkruz/hng12_01](https://github.com/samsmithkruz/hng12_01)

## API Documentation

### Endpoint
- **GET** `https://space.otecfx.com`

### Response Example (200 OK):
```json
{
  "email": "samspike46@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/samsmithkruz/hng12_01"
}
```
### Local Setup
1. Clone the repository:
``` bash
git clone https://github.com/samsmithkruz/hng12_01.git
```
2. Navigate to the project directory:
``` bash
cd hng12_01
```
3. Start a local PHP server:
``` bash
php -S localhost:8000
```
4. Access the API locally at:
``` bash
http://localhost:8000
```
## Deployment
The API is deployed and publicly accessible at: ```https://space.otecfx.com```
