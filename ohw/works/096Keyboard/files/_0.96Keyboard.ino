#include "DigiKeyboard.h"
#include "MorseEnDecoder.h"

#define BTN 2

morseDecoder morseInput(BTN, MORSE_KEYER, MORSE_ACTIVE_LOW);

void setup() 
{
  morseInput.setspeed(10);
}


void loop() 
{
  morseInput.decode();
  DigiKeyboard.update();
  
  if (morseInput.available())
  {
    DigiKeyboard.sendKeyStroke(0);
    char receivedMorse = morseInput.read();
    DigiKeyboard.print(receivedMorse);
    if (receivedMorse == '#') DigiKeyboard.println("ERROR:too many morse signals!");
  }
  // this is generally not necessary but with some older systems it seems to
  // prevent missing the first character after a delay:
  // DigiKeyboard.sendKeyStroke(0);
  // DigiKeyboard.delay(5000);
}
