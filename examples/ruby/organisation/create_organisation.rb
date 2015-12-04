require 'uri'
require 'net/http'

url = URI("https://exenzo.nl/api/v1/organisation")

http = Net::HTTP.new(url.host, url.port)
http.use_ssl = true
http.verify_mode = OpenSSL::SSL::VERIFY_NONE

request = Net::HTTP::Post.new(url)
request["x-authorization"] = 'ORGANISATION_API_TOKEN'
request["content-type"] = 'application/json'
request["cache-control"] = 'no-cache'
request.body = "{\n    \"name\" : \"Test organisatie\",\n    \"image\" : \"/9j/2wCEAAgGBgcGBQgHBwcJCQg....zx8S252ZgUlFJVnOLRRSUAf//Z\"\n}"

response = http.request(request)
puts response.read_body