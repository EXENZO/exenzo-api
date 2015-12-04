import http.client

conn = http.client.HTTPSConnection("exenzo.nl")

payload = "{\n    \"name\" : \"Organisation Name\"\n}"

headers = {
    'x-authorization': "ORGANISATION_API_TOKEN",
    'content-type': "application/json",
    'cache-control': "no-cache",
    }

conn.request("PUT", "/api/v1/organisation/{organisation_id}", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))