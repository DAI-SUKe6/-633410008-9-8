<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายงานการวิเคราะห์พื้นที่</title>
  <!-- นำเข้าไฟล์ CSS ของ Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>รายงานการวิเคราะห์พื้นที่</h1>
    <form action="process.php" method="POST">
      <div class="form-group">
        <label for="target_analysis"><h5>การวิเคราะห์พื้นที่เป้าหมาย</h5></label>
        <textarea class="form-control" id="target_analysis" name="target_analysis" rows="4"></textarea>
      </div>&nbsp;&nbsp;
      
      <h3>SWOT Analysis</h3>
      <div class="form-group">
        <label for="strengths"><h5>● จุดแข็งของพื้นที่</h5></label>
        <textarea class="form-control" id="strengths" name="strengths" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="weaknesses"><h5>● จุดอ่อนของพื้นที่</h5></label>
        <textarea class="form-control" id="weaknesses" name="weaknesses" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="opportunities"><h5>● โอกาสและความท้าทายในพื้นที่</h5></label>
        <label for="opportunities">(ในพื้นที่คาดว่าจะมีโอกาสที่จะพัฒนาอะไรบ้างเพื่อให้พื้นที่หรือตัวท่านเองมีคุณภาพชีวิตที่ดีขึ้น)</label>
        <textarea class="form-control" id="opportunities" name="opportunities" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="threats"><h5>อุปสรรคและปัจจัยคุกคามในพื้นที่</h5></label>
        <label for="threats">(มีปัจจัยใดหรืออุปสรรคใดที่ทําให้พื้นที่ไม่สามารถพัฒนาได้)</label>
        <textarea class="form-control" id="threats" name="threats" rows="4"></textarea>
      </div>&nbsp;&nbsp;

      <h3>ทรัพยากรท้องถิ่นที่สำคัญ</h3>
      <div class="form-group">
        <label for="tourist_attractions"><h5>● สถานที่ท่องเที่ยวหรือสถานที่สำคัญในพื้นที่</h5></label>
        <textarea class="form-control" id="tourist_attractions" name="tourist_attractions" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="economic_crops"><h5>● พืชเศรษฐกิจในพื้นที่</h5></label>
        <textarea class="form-control" id="economic_crops" name="economic_crops" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="resources"><h5>● สิ่งที่มีมากในพื้นที่</h5></label>
        <textarea class="form-control" id="resources" name="resources" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="community"><h5>● กลุ่มชุมชน/วิสาหกิจชุมชน</h5></label>
        <textarea class="form-control" id="community" name="community" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="reporter_name"><h5>ชื่อผู้รายงาน</h5></label>
        <input type="text" class="form-control" id="reporter_name" name="reporter_name" required>
      </div>
      <div class="form-group">
        <label for="report_date"><h5>วันที่</h5></label>
        <input type="date" class="form-control" id="report_date" name="report_date" required>
      </div>
      <button type="submit" class="btn btn-primary">บันทึก</button>
    </form>
  </div>

  <!-- นำเข้าไฟล์ JavaScript ของ Bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
