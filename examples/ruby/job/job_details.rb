require 'uri'
require 'net/http'

url = URI("https://exenzo.nl/api/v1/job/{job_id}")

http = Net::HTTP.new(url.host, url.port)
http.use_ssl = true
http.verify_mode = OpenSSL::SSL::VERIFY_NONE

request = Net::HTTP::Get.new(url)
request["x-authorization"] = 'ORGANISATION_API_TOKEN'
request["content-type"] = 'application/json'
request["cache-control"] = 'no-cache'

response = http.request(request)
puts response.read_body