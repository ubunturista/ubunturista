# vpc_apache_bastion.json 

Crea un VPC con una red /22. Se crean 4 redes en **us-east-1**. Dos de las redes son públicas y se encuentran en **us-east-1a** y **us-east-1b**. Las otras dos redes son privadas y se encuentran en las dos mismas zonas de disponibilidad.

Se crea un NAT Gateway, un Internet Gateway y se aprovisiona una dirección IP.

A continuación se instancian dos máquinas EC2, una con dirección pública y SSH abierto y otra en la red privada con Apache.

Finalmente se despliega un balanceador de carga ALB que deja pasar las peticiones al puerto 80 hacia un grupo de destino en el que se encuentra la instancia EC2 con el servidor Apache.
