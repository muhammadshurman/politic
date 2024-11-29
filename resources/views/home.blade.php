<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quizo HTML Template - V.1</title>
   <!-- FontAwesome-cdn include -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Google fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
   <!-- Bootstrap-css include -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <!-- Animate-css include -->
   <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
   <!-- Main-StyleSheet include -->
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <!-- Custom Arabic Font Styling -->
   <style>
       body, h1, h2, h3, h4, h5, p, label, button {
           font-family: 'Tajawal', sans-serif !important;
       }
   </style>
</head>

<body>
   <div class="wrapper position-relative">
      <div class="container-fluid px-5">
         <div class="step_bar_content ps-5 pt-5">
            <h5 class="text-black text-uppercase d-inline-block">تحليل اختبار الشخصية</h5>
         </div>
         <div class="progress_bar steps_bar mt-3 ps-5 d-inline-block">
            @for ($i = 1; $i <= count($questions); $i++)
            <div class="step rounded-pill d-inline-block text-center position-relative {{ $i === 1 ? 'active current' : '' }}">{{ $i }}</div>
            @endfor
         </div>
         <form class="multisteps_form position-relative" id="wizard" method="POST" action="{{ route('quiz.submit') }}">
            @csrf
            @foreach($questions as $question)
            <div class="multisteps_form_panel {{ $loop->first ? 'active' : '' }}" data-animation="slideVert">
               <div class="form_content">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form_title ps-5">
                           <h1 class="text-black">{{ $question->question }}</h1>
                        </div>
                     </div>
                     <div class="col-lg-4 text-center">
                        <div class="form_img">
                           <img src="{{ asset('assets/images/bg_' . ($loop->index % 4 + 1) . '.png') }}" alt="image_not_found">
                        </div>
                     </div>
                     <div class="col-lg-4 text-end">
                        <div class="form_items radio-list">
                           <ul class="text-uppercase list-unstyled">
                              <li>
                                 <label for="opt_{{ $question->id }}_1" class="step_{{ $loop->index + 1 }} rounded-pill animate__animated animate__fadeInRight animate_25ms {{ $loop->first ? 'active' : '' }}">
                                    <span class="label-pointer rounded-pill text-center">A</span>
                                    <input type="radio" id="opt_{{ $question->id }}_1" name="answers[{{ $question->id }}]" value="Right" required>
                                    <span class="label-content d-inline-block text-center rounded-pill">{{ $question->option1 }}</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_{{ $question->id }}_2" class="step_{{ $loop->index + 1 }} rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                    <span class="label-pointer rounded-pill text-center">B</span>
                                    <input type="radio" id="opt_{{ $question->id }}_2" name="answers[{{ $question->id }}]" value="Left">
                                    <span class="label-content d-inline-block text-center rounded-pill">{{ $question->option2 }}</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_{{ $question->id }}_3" class="step_{{ $loop->index + 1 }} rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                    <span class="label-pointer rounded-pill text-center">C</span>
                                    <input type="radio" id="opt_{{ $question->id }}_3" name="answers[{{ $question->id }}]" value="Middle">
                                    <span class="label-content d-inline-block text-center rounded-pill">{{ $question->option3 }}</span>
                                 </label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!---------- Form Button ----------> 
               <div class="form_btn py-5 d-flex justify-content-center align-items-center">
                  @if(!$loop->first)
                  <button type="button" class="js-btn-prev f_btn rounded-pill text-uppercase" id="prevBtn">
                     <span><i class="fas fa-arrow-right pe-1"></i></span> السابق
                  </button>
                  @endif
                  @if(!$loop->last)
                  <button type="button" class="js-btn-next f_btn rounded-pill active text-uppercase" id="nextBtn">
                     التالي <span><i class="fas fa-arrow-left ps-1"></i></span>
                  </button>
                  @else
                  <button type="submit" class="f_btn rounded-pill active text-uppercase" id="submitBtn">تأكيد</button>
                  @endif
               </div>
            </div>
            @endforeach
         </form>
      </div>
   </div>
   <!-- jQuery-js include -->
   <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
   <!-- Bootstrap-js include -->
   <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
   <!-- jQuery-validate-js include -->
   <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
   <!-- Custom-js include -->
   <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
