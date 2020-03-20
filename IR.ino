/*
 * Interface InfraRed Sensor Using NodeMCU
 * By TheCircuit
 * Red :     5V
 * Brown: Sensor output
 * Black : Ground
*/

int ledPin = 12; // choose pin for the LED
int inputPin = 0; // choose input pin (for Infrared sensor) 
int val = 0; // variable for reading the pin status 
void setup() 
{ 
   pinMode(ledPin, OUTPUT); // declare LED as output 
   pinMode(inputPin, INPUT); // declare Infrared sensor as input
   Serial.begin(115200);
} 
void loop()
{ 
   val = digitalRead(inputPin); // read input value
   Serial.println(val); 
   /*if (val == HIGH)
   { // check if the input is HIGH
      digitalWrite(ledPin, LOW); // turn LED OFF   
   } 
   else 
   { 
      digitalWrite(ledPin, HIGH); // turn LED ON 
   } */
}
