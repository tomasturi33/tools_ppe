<!DOCTYPE html>
<html>
  <head>
    <title>CV</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style type="text/css">
      body {
        background-size: 100%;
        background-repeat: no-repeat;
        margin: -45px; 
        padding: 0px;
        font-family: 'Lato', sans-serif; 
        font-size:12px;
      }
    </style>

  </head>
  <body>

    <div style="clear:both; position:relative";>

      <div style="position:absolute; left:0pt; width:192pt; background-color: #3374ff; height: 100%;">
        <div class="row" style="padding:20px;">
          <div class="col-xs-4" align="center">
              <img src="{{ $photo }}" style="text-align: center;border-radius: 5px;object-fit: none; max-height:140px; max-width: 140px;">
          </div>

          <div class="col-xs-12">
            <div style="width:100%;padding-top: 24px;" align="center">
                <label style="width:100%; 
                              font-weight: bold;
                              font-size: 16px;
                              color:white;
                              text-align: center;
                              padding-top: 24px;">
                        {{ mb_strtoupper($name.' '.$lastname) }}
                        <br>
                        <label style="font-weight:regular; font-size: 10px;">{{ mb_strtoupper($academic_title) }}</label>
                </label>
            </div>

            <table style="width:100%" class="table_cv">
              <tr>
                <td style="width:30%; text-align:right;">DNI:</td>
                <td>{{ $dni }}</td>
              </tr>

              <tr>
                <td style="text-align:right;">Fecha de nacimiento:</td>
                <td>{{ $date_of_birth }}</td>
              </tr>
              
              <tr>
                <td style="text-align:right;">Localidad:</td>
                <td>{{ $location }}</td>
              </tr>

              <tr>
                <td style="text-align:right;">Celular:</td>
                <td>{{ $cell_phone }}</td>
              </tr>

              <tr>
                <td style="text-align:right;">Correo electrónico:</td>
                <td>{{ $email }}</td>
              </tr>

              @if($linkedin!='')
              <tr>
                <td style="text-align:right;">Linkedin:</td>
                <td>{{ ($linkedin!=null)?$linkedin:'' }}</td>
              </tr>
              @endif

            </table>  

          </div>       
        </div>  
      </div>

      <div style="margin-left:200pt;">
        <div class="row" style="padding:20px;">
          @if($training!='')
          <p>
              <br>
              <label style="font-weight: bold; color:#036185">Formación:</label>
              <br>
              <?php echo nl2br($training) ?>
          </p>
          @endif

          @if($work_experience!='')
          <p>
              <br>
              <label style="font-weight: bold; color:#036185">Experiencia laboral:</label>
              <br>
              <?php echo nl2br($work_experience) ?>
          </p>
          @endif

          @if($languages!='')
          <p>
              <br>
              <label style="font-weight: bold; color:#036185">Idiomas:</label>
              <br>
              <?php echo nl2br($languages) ?>
          </p>
          @endif
          
          @if($courses_trainings!='')
          <p>
              <br>
              <label style="font-weight: bold; color:#036185">Cursos y capacitaciones: </label>
              <br>
              <?php echo nl2br($courses_trainings) ?>
          </p>
          @endif

          @if($interests_or_additional_information!='')
          <p>
              <br>
              <label style="font-weight: bold; color:#036185">Intereses:</label>
              <br>
              <?php echo nl2br($interests_or_additional_information) ?>
          </p>
          @endif

          @if($additional_information!='')
          <p>
              <br>
              <label style="font-weight: bold; color:#036185">información adicional:</label>
              <br>
              <?php echo nl2br($additional_information) ?>
          </p>
          @endif
        </div>
      </div>
    </div>
  </body>
</html>