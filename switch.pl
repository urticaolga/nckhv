#!/usr/bin/perl

use HTML::Template;


my @all = qw!
	index.html css/goose.css navbar.html jumbotron.html script_carousel.html
    contact.html map.html footer.html lawyer.html contact_list.html feedback.html  
    quote_carousel.html thanks.html safety.html
    news/verhovnyi_sud_opredelil.html 
    news/oplata_poloviny_shtrafa.html
    news/verchovnyi_sud_vypustil.html   
    news/novyj_detektor_lzhi.html   
    news/otmenyaetsya_ustanovka_znaka.html   
    news/srok_uplaty_shtrafa.html   
    news/vnutrirossiyskiy_rouming.html
    news/normy_zhilischnogo_kodeksa.html   
    news/uvelichena_summa_dolga.html 
    news/verchovnyj_sud_razreshil.html  
    news/verchovnyj_sud_razaysnil.html  
    news/napravlyat_pretenzii.html  
!;


my $action = $ARGV[0];
my $file;
my $name;
my $fname;
my %param;


# History pages family.
sub history ($) {
    my ($number) = @_;
    my @histories;

    for (my $i = 1; $i <= 9; $i++) {
	push @histories, {
	    number  => $i,
	    current => $i == $number ? 1 : 0,
	};
    }

    $param{histories} = \@histories;
    $param{history} = undef unless $number == 1;
}


## Dispatch action.
sub dispatch ($) {
    my ($action) = @_;

    if ($action =~ m!^([0-9a-z_/]+?)(\d*)\.(html|css)$!) {   # some html or css
	$file = $action;                                 # with optional number
	$name = $1;
	%param = {};

	$fname = $name;                                    # foo/bar => foo_bar
	$fname =~ tr!/!_!;
	$param{$fname} = 1;
	&$fname($2) if defined &$fname;

	$param{root} = $name;                           # foo/bar/baz => ../../
	$param{root} =~ s![^/]+!!;
	$param{root} =~ s!/[^/]*!../!g;

	my $tmpl = HTML::Template->new(
	    filename		   => $file,
	    path		   => [ 'tmpl' ],
	    search_path_on_include => 1,
	    die_on_bad_params	   => 0 );

	print "$file\n";
	open(OUT, ">$file");
	$tmpl->param(%param);
	print OUT $tmpl->output;
	close(OUT);
    } elsif ($action eq 'all') {                                # make them all
	foreach my $each (@all) {
	    dispatch($each);
	}
    }
}


dispatch($action);

####
