import http.client

conn = http.client.HTTPSConnection("exenzo.nl")

payload = "{\n    \"name\" : \"Test organisatie\",\n    \"image\" : \"/9j/2wCEAAgGBgcGBQgHBsLDBkSEw8....e5r0qMf3dzx8S2gUlFJVnOLRRSUAf//Z\"\n}"

headers = {
    'x-authorization': "ORGANISATION_API_TOKEN",
    'content-type': "application/json",
    'cache-control': "no-cache",
    }

conn.request("POST", "/api/v1/organisation", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))