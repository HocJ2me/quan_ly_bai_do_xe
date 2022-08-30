#include <Arduino.h>
#include <ArduinoJson.h>
#include <SoftwareSerial.h>
SoftwareSerial serial_ESP(D4,D3);

void Serial_Setup()
{
    Serial.begin(9600);
    serial_ESP.begin(9600);
}


int Serial_GetData()
{
    String data_uart;
    if (serial_ESP.available())
    {
      data_uart = serial_ESP.readString();
      Serial.println(data_uart);
    }
    else
    {
      return -1;
    }
     if (data_uart.length() > 0)
      {
          StaticJsonDocument<200> doc;
          DeserializationError error = deserializeJson(doc, data_uart);
          if (error) {
            Serial.print(F("deserializeJson() failed: "));
            Serial.println(error.c_str());
            return -1;
          }
          float t1 = doc["t1"];
          float t2 = doc["t2"];
          float t3 = doc["t3"];
          float t4 = doc["t4"];
          float t5 = doc["t5"];
          
          temp1_c = t1;
          temp2_c = t2;
          temp3_c = t3;
          temp4_c = t4;
          temp5_c = t5;
      }
      return 1;
}
