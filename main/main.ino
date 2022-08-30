#include "config.h"
#include "MFRC522Driver.h"
#include "ServerConnect.h"
#include "ServoDriver.h"
#include "ArduinoConnect.h"
void setup() {
  Serial_Setup(); 
  MRFC522_Setup();
  Servo_Setup();
  Wifi_Setup();
}
int isNewTemperatureData = -1; 
void loop() {
  int isNewTag = MRFC522_GetData();
  isNewTemperatureData = Serial_GetData();
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
    Server_PostData(rfid_Str, temp1_c, temp2_c, temp3_c, temp4_c, temp5_c);
    
    Servo_Open();
    Servo_Close();
  }
}
