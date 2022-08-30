#include <ArduinoJson.h>
#include <DallasTemperature.h>
// Data wire is plugged into digital pin 2 on the Arduino
#define ONE_WIRE_BUS 13

// Setup a oneWire instance to communicate with any OneWire device
OneWire oneWire(ONE_WIRE_BUS);  

// Pass oneWire reference to DallasTemperature library
DallasTemperature sensors(&oneWire);

void setup() {
 // Initialize Serial port
  Serial.begin(9600);
  while (!Serial) continue;
  sensors.begin();  // Start up the library

}

void loop() {
   sensors.requestTemperatures(); 

  StaticJsonDocument<200> doc;

  doc["t1"] = sensors.getTempCByIndex(0);
  doc["t2"] = sensors.getTempCByIndex(1);
  doc["t3"] = sensors.getTempCByIndex(2);
  doc["t4"] = sensors.getTempCByIndex(3);
  doc["t5"] = sensors.getTempCByIndex(4);


  serializeJson(doc, Serial);
  Serial.println();
  delay(2000);
}
