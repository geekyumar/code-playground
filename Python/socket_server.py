import socket as s

host = '127.0.0.1'
port = 1234

sock = s.socket(s.AF_INET, s.SOCK_STREAM)
sock.setsockopt(s.SOL_SOCKET, s.SO_REUSEADDR, 1)

sock.bind((host, port))
sock.listen()
conn, addr = sock.accept()

if(conn):
    print("Connection established with {}:{}".format(addr[0], addr[1]))
else:
    print('Connection Failed!')

data = conn.recv(1024)

while(data):
    print(data.decode())
    data = conn.recv(1024)