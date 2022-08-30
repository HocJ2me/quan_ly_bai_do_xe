#include <Servo.h>     
Servo myServo;

void Servo_Setup()
{
    myServo.attach(PIN_Servo);
    myServo.write(110);
}

void Servo_Open()
{
    myServo.write(0);
    delay(5000);
}
void Servo_Close()
{
    myServo.write(110);
}
