#!/usr/bin/perl

use Statistics::R;
my $R = Statistics::R->new(r_bin => "/usr/bin/R") ;

$R->  startR ;
$R -> send('setwd("/media/psf/Home/Desktop")');
$R -> send('m2<- matrix(c(seq(from=1,to=15,by=1)),nrow=3,ncol=5)');
$R -> send('print(m2)');
$R -> send('x<- apply(m2,1,median)');
$R -> send('print(x)');
$R -> send('write(x, file="output_today3")');





