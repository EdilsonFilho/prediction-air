@extends('adminlte::page')

@section('content_header')

@stop

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Quem somos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <strong><i class="fa fa-book margin-r-5"></i>IOCHIP</strong>

      <p class="text-muted">
        Somos um time de engenheiros de computação que gostam de desafios! Este projeto nasceu como projeto final no curso de Neurocomputação no programa de pós-graduação INPE.
        Esta plataforma foi totalmente produzida por Edilson e Ronald.
      </p>

      <hr>

      <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

      <p class="text-muted">Fortaleza, Ceará</p>

      <hr>

      <strong><i class="fa fa-pencil margin-r-5"></i>Fazemos projetos nas áreas</strong>

      <p>
        <span class="label label-danger">Sistemas Web Personalizados</span>
        <span class="label label-success">Aplicativos para Smartphone</span>
        <span class="label label-info">Inteligência Artificial e IoT</span>
        <span class="label label-warning">Projetos de Hardware</span>
        <span class="label label-primary">Blockchain e Big Data</span>
      </p>

      <hr>

      <strong><i class="fa fa-file-text-o margin-r-5"></i>Contato</strong>

      <p>Fale conosco pelo e-mail: contato@iochip.com.br</p>
    </div>
    <!-- /.box-body -->
</div>
@stop