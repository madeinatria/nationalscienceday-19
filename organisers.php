<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/bootstrap.css" />

</head>

<body>
  <div style="margin-top:100px; ;" class="container">
    <h3 style="margin-bottom:100px;">Registration Details</h3>

    <form action="save-organizer.php" method="post">
      <div class="form-group">
        <label for="event">Event:</label>
        <select class="custom-select" name="event" id="event">
                <optgroup style='background-color:#404040;' label='Inter-College Events'>
                  <option value='1'>Classical Solo Dance</option>
                  <option value='2'>Group Dance</option>
                  <option value='3'>Battle of Bands</option>
                  <option value='4'>Fashion Show</option>
                  <option value='5'>Beat Boxing</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Art'>
                  <option value='6'>Painting</option>
                  <option value='7'>Sketching</option>
                  <option value='8'>Rangoli</option>
                  <option value='9'>Collage</option>
                  <option value='10'>Photography</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Fun'>
                  <option value='11'>Hogathon</option>
                  <option value='12'>Minute To Win it</option>
                  <option value='13'>Antakshari</option>
                  <option value='14'>PUBG</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Dance'>
                  <option value='15'>Solo</option>
                  <option value='16'>Group</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Music'>
                  <option value='17'>Indian Solo</option>
                  <option value='18'>Classical vocal Solo</option>
                  <option value='19'>Western vocal Solo(Acoustic)</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Literary'>
                  <option value='20'>Poetry</option>
                  <option value='21'>Debate</option>
                  <option value='22'>Creative Writing</option>
                  <option value='23'>Quiz</option>
                </optgroup>
              </select>        </select>
      </div>
      <button type="submit" class="btn btn-light">Retrieve</button>

    </form>


  </div>
</body>

</html>