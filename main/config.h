#ifndef STASSID
#define STASSID "BK Star"
#define STAPSK  "bkstar2021"
#endif

String LOCALHOST = "http://192.168.1.27/";
int port = 80;

const char* ssid     = STASSID;
const char* password = STAPSK;

const int PIN_Servo = D2;

float temp1_c = 0, temp2_c = 0, temp3_c = 0, temp4_c = 0, temp5_c = 0;
