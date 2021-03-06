<!doctype html>
<html lang="sr">

	<head>
		<?php include("head.php");?>
	</head>
	<body>
		
		<!-- Ovo je komentar-->
		<div id="wrapper">
		
			<header>
				<?php include("header.php");?>
			</header>
		
			<nav>
				<?php include("nav.php");?>
			</nav>
			
			<main>
				<content>

					<article>
					<h2>Programing on Linux</h2>
					<img src="img/programming.jpg" class="levo" />

					<p>Linux distributions support dozens of programming languages.<br /> 
					The original development tools used for building both Linux applications and operating system programs are found within the GNU toolchain, which includes the GNU Compiler Collection (GCC) and the GNU Build System. Amongst others, GCC provides compilers for Ada, C, C++, Go and Fortran. Many programming languages have a cross-platform reference implementation that supports Linux, for example PHP, Perl, Ruby, Python, Java, Go, Rust and Haskell. First released in 2003, the LLVM project provides an alternative cross-platform open-source compiler for many languages. Proprietary compilers for Linux include the Intel C++ Compiler, Sun Studio, and IBM XL C/C++ Compiler. BASIC in the form of Visual Basic is supported in such forms as Gambas, FreeBASIC, and XBasic, and in terms of terminal programming or QuickBASIC or Turbo BASIC programming in the form of QB64.</p>

					<p>A common feature of Unix-like systems, Linux includes traditional specific-purpose programming languages targeted at scripting, text processing and system configuration and management in general. Linux distributions support shell scripts, awk, sed and make. Many programs also have an embedded programming language to support configuring or programming themselves. For example, regular expressions are supported in programs like grep, or locate, while advanced text editors, like GNU Emacs, have a complete Lisp interpreter built-in.
					</p>

					<p>Most distributions also include support for PHP, Perl, Ruby, Python and other dynamic languages. While not as common, Linux also supports C# (via Mono), Vala, and Scheme. A number of Java Virtual Machines and development kits run on Linux, including the original Sun Microsystems JVM (HotSpot), and IBM's J2SE RE, as well as many open-source projects like Kaffe and JikesRVM.
					</p>

					<p>GNOME and KDE are popular desktop environments and provide a framework for developing applications. These projects are based on the GTK+ and Qt widget toolkits, respectively, which can also be used independently of the larger framework. Both support a wide variety of languages. There are a number of Integrated development environments available including Anjuta, Code::Blocks, CodeLite, Eclipse, Geany, ActiveState Komodo, KDevelop, Lazarus, MonoDevelop, NetBeans, and Qt Creator, while the long-established editors Vim, nano and Emacs remain popular
					</p>

					</article>

					
				</content>
			
				<aside>
					<?php include("aside.php");?>
				</aside>
			</main>
		
			<footer>
				<?php include("footer.php");?>
			</footer>
	
		</div>
	

		
	</body>
</html>
