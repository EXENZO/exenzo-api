import http.client

conn = http.client.HTTPSConnection("exenzo-nl.saas")

headers = {
    'x-authorization': "ORGANISATION_API_TOKEN",
    'content-type': "application/json",
    'cache-control': "no-cache",
    }

conn.request("GET", "/api/v1/organisation/{organisation_id}", headers=headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))