@extends('layouts.app')
@section('page')


<form id="regForm" action="{{ URL::to('/input/save') }}"method="POST">
  @csrf
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name:
    <p><input placeholder="Nama Lengkap..." oninput="this.className = ''" name="nama"></p>
    <p><input placeholder="Kelas..." oninput="this.className = ''" name="kelas"></p>
  </div>
  
  <div class="tab">
  @for ($i = 0; $i < 8; $i++)
    <p>Semester {{$i+1}}</p>
    <p><input type="number" placeholder="Nilai Matematika..." oninput="this.className = ''" name="matematika" ></p>
    <p><input type="number" placeholder="Nilai Fisika..." oninput="this.className = ''" name="fisika"></p>
    <p><input type="number" placeholder="Nilai Kimia..." oninput="this.className = ''" name="kimia"></p>
    @endfor
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
@endSection