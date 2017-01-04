
from PIL import Image;

im = Image.open('./a.jpg');
im.thumbnail((100,100));
im.save('thumb.jpg', 'JPEG')
print(im.height);


