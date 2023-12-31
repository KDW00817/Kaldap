![header](https://capsule-render.vercel.app/api?type=waving&color=auto&height=300&section=header&text=보행자%20인식%20기술을%20이용한%20재난%20안전%20시스템&fontSize=30&animation=fadeIn&descAlignY=51&descAlign=62)

## Technology Used
![image](https://github.com/KDW00817/test/assets/153358048/6ffddc20-ed45-4b5d-92e3-5c8b8f33ce00) ![image](https://github.com/KDW00817/test/assets/153358048/aeb0b5a6-53d2-42bf-920d-d059320b67cb)

## Development environment
![image](https://github.com/KDW00817/test/assets/153358048/541ec4c5-6ab2-4a4b-b439-08ba91ef8d2c) ![image](https://github.com/KDW00817/test/assets/153358048/3c931611-5b4c-4644-96b4-f1a9b90d2892)

## System flow chart
![image](https://github.com/KDW00817/test/assets/153358048/ded11cc0-63de-4165-97e6-db57ad16b3f5)


## H/W Configuration
* ubuntu 18.04
* Jetson nano : Transmit processed video information to the server
* Computer : Configure an administrator system by connecting Jason Nano and a monitor
* Webcam : Configure CCTV by connecting Jackson Nano and webcam
* Web : Provide video to web pages in real time
* Warning notification : Broadcast warning notifications according to the risk level specified in real time on the web page

## S/W configuration
* Yolov4-Tiny : Application of open source YOLOv4-Tiny real-time object recognition deep learning algorithm
* Jetson nano : Process video information and transmit video information to server
* Webcam : Object recognition through camera
* Web : Real-time video information reflected on administrator web page
* Warning notification : Notifications and warnings tailored to specified risk levels
* manager : The administrator responds according to the unit manual

## Pedestrian recognition
![image](https://github.com/KDW00817/test/assets/153358048/d3d79279-d7f0-4234-bc28-5ba763462647) ![image](https://github.com/KDW00817/test/assets/153358048/ee17c400-b1dc-4f3d-81aa-d7a6dfb629bc)
* mAP stands for Mean Average Precision
* An mAP of 95% provides top results with 95% accuracy
* Loss refers to the loss value of the learned deep learning model
* Loss represents the difference between the output predicted by the model and the actual correct answer
* The lower the loss value, the better the model’s performance

![image](https://github.com/KDW00817/test/assets/153358048/40cec53c-e9f3-47c7-b479-8e4fee0a3c9e)
* The mAP of YOLOv4 is 6% higher than YOLOv4-Tiny, but for real-time use, YOLOv4-Tiny, which has about 5 times higher FPS, is used


## Set the number of people per square meter level 
![image](https://github.com/KDW00817/test/assets/153358048/0725980c-d4e4-43ec-ae24-c748cb70d595)
## Set the number of falls per square meter level
![image](https://github.com/KDW00817/test/assets/153358048/d75ae802-8987-4761-baf1-64af51b1a4f4)


## Final result
![image](https://github.com/KDW00817/test/assets/153358048/92b1eef7-ffe6-4289-bfd8-7db0f99b6fae)
![image](https://github.com/KDW00817/test/assets/153358048/980d30ba-b9f3-4e1f-8b8b-36aa84b83d3d)
* Displays steps according to the current number of people
* Displays the color appropriate for the current stage

![image](https://github.com/KDW00817/test/assets/153358048/1d0cc9f0-139b-4414-b576-9c6349e0bdad) ![image](https://github.com/KDW00817/test/assets/153358048/ab2ede09-af11-4fb2-aee2-d25384ba5ed2)

* Create a notification banner after the caution phase 
* The risk level is indicated by alternating red and black background colors

![image](https://github.com/KDW00817/test/assets/153358048/1bd33bca-7c21-4b6d-bf9e-6a9869821dfc)
* Recognition of person who has fallen


## Benefit
* In the event of an accident, the location and situation of rescue victims can be identified after securing appropriate first aid supplies and emergency personnel

## Supplementary matters
* Realistically, it is not possible to recognize a large number of people
* Since a single camera cannot recognize the population density of a large area, efficiency and performance will improve if multiple areas are recognized using multiple cameras


