#include "config.h"
#include "MFRC522Driver.h"
#include "ServerConnect.h"
#include "ServoDriver.h"
#include "ArduinoConnect.h"

void setup() 
{
  Serial_Setup(); 
  MRFC522_Setup();
  Servo_Setup();
  Wifi_Setup();
}
int isNewTemperatureData = -1; 
void loop() {
  isNewTemperatureData = Serial_GetData();
  if(isNewTemperatureData > -1)
  {
    Server_PostTemperature(temp1_c,temp2_c,temp3_c,temp4_c,temp5_c);
    
    int numberCar = Server_GetNumberCar();
    StaticJsonDocument<200> doc;
    doc["car"] = numberCar;
    doc["barrier"] = "CLOSE";
    serializeJson(doc, serial_ESP);
  }
  int isNewTag = MRFC522_GetData();
  String rfid_Str = "";
  if(isNewTag == 1)
  {  
    //convert from byte data to String hex
    for(int i = 0; i < 3; i++) 
    {
      if(nuidPICC[i] < 0x10) 
      {
        rfid_Str += '0';
      }
      rfid_Str += String(nuidPICC[i], HEX) + ":";
    }
    if(nuidPICC[3] < 0x10) 
    {
      rfid_Str += '0';
    }
    rfid_Str += String(nuidPICC[3], HEX);
    Server_PostInOut(rfid_Str);
    int numberCar = Server_GetNumberCar();
    StaticJsonDocument<200> doc;
    doc["car"] = numberCar;
    doc["barrier"] = "OPEN";
    serializeJson(doc, serial_ESP);
    Servo_Open();
    doc["car"] = numberCar;
    doc["barrier"] = "CLOSE";
    serializeJson(doc, serial_ESP);
    Servo_Close();
    
  }
}
