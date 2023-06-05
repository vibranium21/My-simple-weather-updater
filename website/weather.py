import requests
import json

def get_weather_data(api_key, city):
    url = f"http://api.openweathermap.org/data/2.5/weather?q={city}&appid={api_key}"
    response = requests.get(url)
    data = json.loads(response.text)
    return data
def main():
    api_key = "66f288d993da3c522897dd934449ab63"
    city = "Durham,US"
    weather_data = get_weather_data(api_key, city)
    print(weather_data)

if __name__==  '__main__':
    main()