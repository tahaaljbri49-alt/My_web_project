<?php
    // 1. تعريف المتغيرات
    $studentName = "طه";
    $courseName = "تطوير ويب (تكنولوجيا صفحة PHP)";
    $university = "جامعة ذمار";
    $score = 95;

    // 2. تعريف دالة (Function) لحساب وتنسيق رسالة التقدير
    Function getEvaluation($grade) {
        If ($grade >= 90) {
            Return "ممتاز (Excellent)";
        } elseif ($grade >= 80) {
            Return "جيد جداً (Very Good)";
        } else {
            Return "جيد (Good)";
        }
    }
    ?>
    
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>واجب تطوير الويب – PHP</title>
    <style>
        Body {
            Font-family: 'Tahoma', sans-serif;
            Background-color: #f4f7f6;
            Color: #333;
            Margin: 0;
            Padding: 20px;
        }
        .container {
            Max-width: 600px;
            Margin: 0 auto;
            Background: #ffffff;
            Padding: 30px;
            Border-radius: 10px;
            Box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        H1 {
            Color: #2c3e50;
            Text-align: center;
            Border-bottom: 2px solid #3498db;
            Padding-bottom: 10px;
        }
        .info-box {
            Background: #ecf0f1;
            Padding: 15px;
            Margin: 15px 0;
            Border-radius: 5px;
            Border-right: 5px solid #3498db;
        }
        .footer {
            Text-align: center;
            Margin-top: 20px;
            Font-size: 0.9em;
            Color: #7f8c8d;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>صفحة تقرير الطالب (PHP)</h1>

    

    <!—3. طباعة المخرجات باستخدام HTML و PHP 
    <div class="info-box">
        <p><strong>اسم الطالب:</strong> <?php echo $studentName; ?></p>
        <p><strong>المساق الدراسي:</strong> <?php echo $courseName; ?></p>
        <p><strong>الجامعة:</strong> <?php echo $university; ?></p>
        <p><strong>الدرجة:</strong> <?php echo $score; ?> / 100</p>
        <p><strong>التقدير العام:</strong> <?php echo getEvaluation($score); ?></p>
    </div>

</div>

<div class="footer">
    <p>تم تصميم وتنفيذ الصفحة باستخدام PHP و HTML و CSS بنجاح.</p>
</div>

</body>
</html>
