import pystray
import PIL.Image

image = PIL.Image.open("myapplogo.jpg")

def on_clicked(icon, item):
    print("Clicked")


icon = pystray.Icon("Certerus", image, menu=pystray.)