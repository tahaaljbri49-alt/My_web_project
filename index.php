<?php
// متغيرات لتخزين البيانات المرسلة
$techName = "";
$techDescription = "";
$isSubmitted = false;

// التحقق مما إذا تم إرسال النموذج عبر طريقة POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال وتطهير المدخلات لضمان الأمان
    $techName = htmlspecialchars(trim($_POST['techName']));
    $techDescription = htmlspecialchars(trim($_POST['techDescription']));
    $isSubmitted = true;
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تطوير ويب - واجب رقم 36</title>
    <!-- استدعاء Bootstrap للتصميم السريع والاحترافي -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.5.3.0/npm/bootstrap@5.3.0/dist/css/rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/rtl.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 bg-white">
                    <h2 class="text-center text-primary mb-3">تطوير ويب م/2 - واجب رقم 36</h2>
                    <p class="text-muted text-center">تصميم وتطوير صفحة تكنولوجيا باستخدام لغة PHP</p>
                    <hr>

                    <?php if (!$isSubmitted): ?>
                        <!-- نموذج الإدخال (Form) -->
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="techName" class="form-label">اسم التقنية أو الأداة التكنولوجية:</label>
                                <input type="text" class="card form-control p-2" id="techName" name="techName" required placeholder="أدخل اسم التقنية...">
                            </div>

                            <div class="mb-3">
                                <label for="techDescription" class="form-label">وصف مختصر:</label>
                                <textarea class="card form-control p-2" id="techDescription" name="techDescription" rows="4" required placeholder="اكتب نبذة مختصرة عنها..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2">إرسال ومعالجة البيانات عبر PHP</button>
                        </form>

                    <?php else: ?>
                        <!-- قسم عرض النتيجة بعد المعالجة بـ PHP -->
                        <div class="alert alert-success text-center" role="alert">
                            <strong>تمت معالجة وعرض البيانات بنجاح بواسطة PHP!</strong>
                        </div>

                        <div class="mb-3">
                            <h5>التقنية المُدخلة:</h5>
                            <div class="p-3 bg-light rounded border"><?php echo $techName; ?></div>
                        </div>

                        <div class="mb-3">
                            <h5>الوصف:</h5>
                            <div class="p-3 bg-light rounded border"><?php echo nl2br($techDescription); ?></div>
                        </div>

                        <a href="" class="btn btn-secondary w-100 mt-3">إدخال تقنية أخرى</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
