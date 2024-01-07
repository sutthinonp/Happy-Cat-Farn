<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy cat farm</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="slideshow-container">
        <div class="mySlides">
            <div class="container">
                <div class="item">
                    <h1>Happy Cat Farm</h1>
<p> ปัจจุบันเกมต่าง ๆ ได้เข้ามามีบทบาทในชีวิตประจำวันของคนเรามากมาย โดยแต่ละเกมนั้นก็จะ  มีข้อดีและข้อเสียแตกต่างกันออกไป ซึ่งเกมในปัจจุบันนั้นก็มีมากมายหลายรูปแบบ เช่น เกมส่งเสริมทักษะการคำนวณ เกมส่งเสริมทักษะการวางแผน เกมส่งเสริมทักษะการสังเกตุ เกมส่งเสริมด้านกีฬา  เกมส่งเสริมด้านการศึกษา เกมส่งเสริมด้านการท่องเที่ยว เป็นต้น ซึ่งเกมแต่ละเกมก็จะช่วยฝึกฝนทักษะและส่งเสริมในด้านต่าง ๆ
	จึงเป็นเรื่องที่สำคัญที่เราจะต้องเลือกสรรเล่นเกมที่มีคุณภาพ และให้ประโยชน์กับผู้เล่นเกม สมาชิกในโครงงานเล็งเห็นถึงความสำคัญในจุดนี้จึงมีความคิดที่จะพัฒนาเกมที่  สร้างสรรค์และเป็นประโยชน์ โดยในโอกาสนี้จะมุ่งเน้น ถึงการฝึกฝนความไวในการคิด จะช่วยพัฒนา  ทักษะการแก้ปัญหาในชีวิตจริงได้ดียิ่งขึ้นผ่านระบบเกมคอมพิวเตอร์ในรูปแบบเกม
	ผู้จัดทำในฐานะนักศึกษาจึงนำเทคโนโลยีการออกแบบเกมและความรู้ที่อาจารย์สอนมาใช้ในการพัฒนาเกม จึงเลือกที่จะพัฒนาเกมเพื่อความบันเทิงบนคอมพิวเตอร์ในรูปแบบของเกมซึ่งมีลักษณะเป็นแพลตฟอร์มเกมคือเกมแนว Life Simulation เป็นการใช้ชีวิตในฟาร์มโดยใช้โปรแกรม Godot Engine ซึ่งมีความสามารถการทำงานสร้างเกมและพัฒนาเกมได้เป็นอย่างดี
  </p>
                    <a href="file/Sprout Valley Demo.zip" download="Sprout Valley Demo.zip">Download</a>
                    <ul>
                        <li><a href="javascript:void(0);" onclick="myFunction1()">วิธีการติดตั้ง</a></li>
                        <li><a href="javascript:void(0);" onclick="myFunction2()">วิธีการเล่น</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="slider-arrows">
            <div class="arrow" id="left-arrow" onclick="prevSlide()">❮</div>
            <div class="arrow" id="right-arrow" onclick="nextSlide()">❯</div>
        </div>
    </div>
</html>

<script>
function myFunction1() {
  const messages = [
    "โหลดไฟล์เกม",
    "คลิ๊กขวาเพื่อทำการแตกไฟล์",
    "เข้าเกมได้เลย Have fun",
  ];

  const messageText = messages.map((message, index) => `Step ${index + 1}: ${message}`).join('<br>');

  Swal.fire({
    title: 'วิธีการติดตั้ง',
    html: messageText,
  });
}
  </script>

<script>
function myFunction2() {
  const messages = [
    "WASD เพื่อบังคับทิศทาง",
    "กด Tab เพื่อเปิดกระเป๋าเครื่องมือ",
    "คลิกเม้าส์เพื่อทำสิ่งต่าง ๆ",
  ];

  const messageText = messages.map((message, index) => `Step ${index + 1}: ${message}`).join('<br>');

  Swal.fire({
    title: 'วิธีการเล่นเกม',
    html: messageText,
  });
}
  </script>

<script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.mySlides');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Initial display
        showSlide(currentSlide);
    </script>

