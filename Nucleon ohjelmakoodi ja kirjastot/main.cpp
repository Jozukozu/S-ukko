#include "mbed.h"
#include "BMP280_SPI.h"

#define SAMPLES_CNT 1000
#define PERIOD_CNT 10
#define PI 3.141592653589793238462
#define MAX 4

Serial pc(USBTX, USBRX);

BMP280_SPI sensor(D4, D5, D3, D7); // mosi/SDA, miso/SDO, sclk/SCL, cs/CSB

AnalogOut dac(PA_4); //PA_4 alias A2
AnalogIn adc(A0);

AnalogIn LDRPIN(A3);

AnalogIn sensorPin(A1);

float rainSensor;

void calculate_sinewave(void);      //sine generation function

uint16_t dac_buffer[SAMPLES_CNT];
int adc_buffer[SAMPLES_CNT];
int ad[4]={2550,2400,2150,1480};  //ad-muuntimen arvo
int kost[4]={20,40,60,80};    //vastaava kosteusarvo

int main() 
{
    int taul[SAMPLES_CNT]; 
    int arvo, maxval;
    float kosteus;
    
    calculate_sinewave();
    while(true)
    {
        for (int i = 0; i < SAMPLES_CNT; i++) 
        {
            dac.write_u16(dac_buffer[i]);
            adc_buffer[i]=(int)(4095*adc.read());    
            wait_us(100);    
        }  
        for (int i = 0; i < SAMPLES_CNT-1; i++) 
        {
            maxval=taul[0];
            if (maxval<adc_buffer[i+1]) maxval=adc_buffer[i+1];
        }
        arvo=maxval;   
        rainSensor = 1 - sensorPin.read();
        if (arvo>= ad[0]) kosteus=kost[0]-(kost[0]-0)*(arvo-ad[0])/(4095-ad[0]);
        else if (arvo<ad[0] && arvo>=ad[1]) kosteus=kost[1]-(kost[1]-kost[0])*(arvo-ad[1])/(ad[0]-ad[1]);
        else if (arvo<ad[1] && arvo>=ad[2]) kosteus=kost[2]-(kost[2]-kost[1])*(arvo-ad[2])/(ad[1]-ad[2]);
        else if (arvo<ad[2] && arvo>=ad[3]) kosteus=kost[3]-(kost[3]-kost[2])*(arvo-ad[3])/(ad[2]-ad[3]);
        else kosteus = 100 - (100-kost[3])*(arvo-0)/(ad[3]-0);
        pc.printf("%.0f!", kosteus);
 
        float temp = sensor.getTemperature();
        float press = sensor.getPressure();
        
        double voltage = LDRPIN.read();
        double resistance = ((1 - voltage) / voltage) * 3.3;
        double lux = 2798 * exp(-2.421 * resistance);
        
        //printf("%d\r\n", arvo);

        pc.printf("%2.2f!", temp);
        pc.printf("%f!", rainSensor);
        pc.printf("%.2f!", lux);
        pc.printf("%.2f!", press);
        
        wait(60);

    }
    
}

void calculate_sinewave(void)       //sine generation
{
    for (int i = 0; i < SAMPLES_CNT; i++) 
    {
        dac_buffer[i]=32768*cos(2*PI*i/PERIOD_CNT)+32767; //
    }
}
