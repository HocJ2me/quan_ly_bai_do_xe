#include <ArduinoJson.h>
#include <Wire.h> 
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27,16,2);  // set the LCD address to 0x27 for a 16 chars and 2 line display

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
  for(int i=8;i<=12;i++)
    pinMode(i, INPUT);
//  pinMode(12, OUTPUT);
  lcd.init();
  lcd.backlight();
  lcd.setCursor(0,0);
  lcd.print("Bai Do Xe");
}
long long lastSend = 0;
float t1, t2, t3, t4, t5;
void loop()
{
  if(millis() - lastSend > 3000)
  {
    sensors.requestTemperatures(); 
    StaticJsonDocument<200> doc;
  
    doc["t1"] = t1 = sensors.getTempCByIndex(0);
    doc["t2"] = t2 = sensors.getTempCByIndex(1);
    doc["t3"] = t3 = sensors.getTempCByIndex(2);
    doc["t4"] = t4 = sensors.getTempCByIndex(3);
    doc["t5"] = t5 = sensors.getTempCByIndex(4);

//    if(t1 > 50 || t2 > 50 || t3 > 50 || t4 > 50 || t5 > 50 )
//    {
//      digitalWrite(12, HIGH);
//    }
//    else
//    {
//      digitalWrite(12, LOW);
//    }
  
    doc["d1"] = !digitalRead(8);
    doc["d2"] = !digitalRead(9);
    doc["d3"] = !digitalRead(10);
    doc["d4"] = !digitalRead(11);
    doc["d5"] = !digitalRead(12);

    float t_sum = (t1 + t2 + t3 + t4 + t5)/5.0;
    lcd.setCursor(0,0);
    lcd.print("T*C: ");
    lcd.print(t_sum);
    lcd.print("              ");
  
    serializeJson(doc, Serial);
    lastSend = millis();
  }
  if(Serial.available() > 0)
  {
    delay(100);
    String data_uart = Serial.readString();
   StaticJsonDocument<200> doc;
    DeserializationError error = deserializeJson(doc, data_uart);
    if (error) {
      Serial.print(F("deserializeJson() failed: "));
      Serial.println(error.c_str());
      return ;
    }
    int numberCar = doc["car"];
    String barrierStr = doc["barrier"];
    lcd.setCursor(0, 1);
    lcd.print("So cho trong:");
    lcd.print(5 - numberCar);
    lcd.print("/5         ");
//    if()
//    {
//      lcd.setCursor(0,1);
//      lcd.print("Mo cua ra          ");
//    }
//    else
//    {
//      lcd.setCursor(0,1);
//      lcd.print("Dong cua          ");
//    }
    
  }
}
