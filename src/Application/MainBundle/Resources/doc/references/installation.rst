Instalacja i użytkowanie
------------------------

Aby móc generować dokumentację konieczne jest posiadanie interpretera ``Python`` i kilku dodatkowych narzędzi.


Instalacja interpretera *Python*
================================

Windows
^^^^^^^

Należy zainstalować dystrybucję ``Pythona`` ze strony http://www.python.org/download/releases/, najlepiej
najnowszą.

Linux
^^^^^

Linux zazwyczaj ma już zainstalowanego ``Pythona``, jeżeli nie robimy to np. przy pomocy managera pakietów dostępnego
w danej dystrybucji systemu ``Linux``.

Sprawdzamy dostępność interpretera ``Python`` wydając komendę w linii poleceń:

.. code-block:: bash

    > python --version

Efekt powinien wyglądać podobnie do:

.. code-block:: bash

    Python 3.3.2

Jeżeli system informuje nas o braku dostępu konieczne może być dodanie ścieżki do katalogu zawierającego skrypt
``python`` (np. ``C:\Python33``) do zmiennej środowiskowej ``PATH``.

Instalacia Setuptools
=====================

Stostując się do instrukcji na stronie https://pypi.python.org/pypi/setuptools zainstalować pakiet ``Setuptools``.

Instrukcja dla ``MS Windows``

https://pypi.python.org/pypi/setuptools#windows

Instrukcja dla systemu ``Linux``

https://pypi.python.org/pypi/setuptools#unix-based-systems-including-mac-os-x

Po zainstalowaniu pakietu ``Setuptools`` powinniśmy mieć dostępny z linii poleceń skrypt ``easy_install``

.. code-block:: bash

    > easy_install --version

Jeżeli system informuje nas o braku dostępu konieczne może być dodanie ścieżki do katalogu zawierającego skrypty
pakietu ``Python`` (np. ``C:\Python33\Scripts``) do zmiennej środowiskowej ``PATH``.


Instalacja pakietu *Sphinx*
===========================

Instalujemy pakiet ``Sphinx`` wykonując z linii komend polecenie:


.. code-block:: bash

    > easy_install -U Sphinx


Po zainstalowaniu pakietu ``Sphinx`` mamy dostępne skrypty ``sphinx-build`` i ``sphinx-quickstart``.

.. code-block:: bash

    > sphinx-build --help

    Sphinx v1.2b3
    Usage: C:\Python33\Scripts\sphinx-build-script.py [options] sourcedir outdir [filenames..

    General options
    ^^^^^^^^^^^^^^^
    -b <builder>  builder to use; default is html
    -a            write all files; default is to only write new and changed files
    -E            don't use a saved environment, always read all files
    -d <path>     path for the cached environment and doctree files
                    (default: outdir/.doctrees)
    -j <N>        build in parallel with N processes where possible

    Build configuration options
    ^^^^^^^^^^^^^^^^^^^^^^^^^^^
    -c <path>           path where configuration file (conf.py) is located
                          (default: same as sourcedir)
    -C                  use no config file at all, only -D options
    -D <setting=value>  override a setting in configuration file
    -t <tag>            define tag: include "only" blocks with <tag>
    -A <name=value>     pass a value into the templates, for HTML builder
    -n                  nit-picky mode, warn about all missing references

    Console output options
    ^^^^^^^^^^^^^^^^^^^^^^
    -v         increase verbosity (can be repeated)
    -q         no output on stdout, just warnings on stderr
    -Q         no output at all, not even warnings
    -w <file>  write warnings (and errors) to given file
    -W         turn warnings into errors
    -T         show full traceback on exception
    -N         do not emit colored output
    -P         run Pdb on exception

    Filename arguments
    ^^^^^^^^^^^^^^^^^^
    * without -a and without filenames, write new and changed files.
    * with -a, write all files.
    * with filenames, write these.

    Standard options
    ^^^^^^^^^^^^^^^^
    -h, --help  show this help and exit
    --version   show version information and exit


    For more information, see <http://sphinx-doc.org/>.

Tworzymy źródłowy katalog dokumentacji i inicjujemy konfigurację:

.. code-block:: bash

    > mkdir mydocs
    > cd mydocs
    > sphinx-quickstart

Pojawią się pytania na które, w większości odpowiadamy wciskając klawisz ``Enter``, musimy tylko podać

.. code-block:: bash

    > Project name: Moja dokumentacja
    > Author name(s): John Doe
    > Project version: 1.0

Oczywiście wprowadzone dane dostosowujemy do swoich potrzeb.


Generowanie dokumentacji
========================

W niniejszym dokumencie przedstawione zostały sposoby generowania dokumentacji w formacie ``HTML`` i ``PDF``.
Poza tymi formatami ``Sphinx`` wspiera również formaty: ``txt``, ``man``  i ``texinfo``.

Format HTML
^^^^^^^^^^^

Opuszczamy katalog źródłowy dokumentacji i generujemy pliki wynikowe (w tym wypadku w formacie HTML).

.. code-block:: bash

    > cd ..
    > sphinx-build -E -a -b html mydocs mydocshtml

Powinno się pojawić coś podobnego do:

.. code-block:: bash

    Making output directory...
    Running Sphinx v1.2b3
    building [html]: all source files
    updating environment: 1 added, 0 changed, 0 removed
    reading sources... [100%] index

    looking for now-outdated files... none found
    pickling environment... done
    checking consistency... done
    preparing documents... done
    writing output... [100%] index

    writing additional files... genindex search
    copying static files... done
    copying extra files... dumping search index... done
    dumping object inventory... done
    build succeeded.

Teraz możemy obejrzeć wygenerowaną dokumentację:

.. code-block:: bash

    > cd mydocshtml
    > index.html


Format PDF
^^^^^^^^^^

Do generowania dokumentacji w formacie ``PDF`` konieczna jest instalacja oprogramowania ``LaTeX`` oraz programu ``make``
(w środowisku ``MS Windows`` można to zrobić instalując ``CygWina`` lub ``UnxUtils``).

Komendy generujące wyglądają wtedy:

.. code-block:: bash

    > cd ..
    > sphinx-build -E -a -b latex mydocs mydocspdf
    > cd mydocspdf
    > make

Teraz możemy obejrzeć wygenerowaną dokumentację:

.. code-block:: bash

    > cd mydocshtml
    > Mojadokumentacja.pdf


Generowanie dokumentacji przy pomocy ``ant``
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Ponieważ sam proces generowania dokumentacji zawiera wiele wywołań, wielu skryptów można to zautomatyzować
np. przy użyciu skryptu ``build.xml``, oczywiście konieczne jest posiadanie zainstalowanego programu ``ant``.

Poniżej skrypt ``build.xml`` używany do generowania tej dokumentacji.


.. literalinclude:: ../../../../../../build.xml
   :language: xml


Zmiana zawartości i wyglądu szablonu
====================================

Zawartość i wygląd szablonu dokumentacji zmieniamy edytując plik ``conf.py``, poniżej zawartość pliku ``conf.py``
dostosowana do potrzeb niniejszej dokumentacji. Np. temat szablonu (theming) html możemy wybrać z dostępnych na stronie
http://sphinx-doc.org/theming.html, w poniższym skrypcie widać użycie tematu ``nature``, który osobiście uznałem
za najbardziej atrakcyjny wizualnie.


.. literalinclude:: ../conf.py


Struktura katalogu dokumentacji
===============================

Dla nowowygenerowanego szablonu zawartość katalogu wygląda następująco:


.. code-block:: bash

    Makefile
    _build
    _static
    _templates
    conf.py
    index.rst
    make.bat

Powinniśmy dodać katalogi, które będą zawierały podrozdziały, ilustracje i inne potrzebne elementy np. fragmenty kodu.

.. code-block:: bash

    > cd mydocs
    > mkdir images references code


Przykładowo możemy utworzyć dwa pliki podrozdziałów np.

``references/first.rst``

.. code-block:: rest

    Rozdział pierwszy
    =================

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum urna quis libero hendrerit gravida.
    Ut sagittis fringilla lectus. In massa eros, vestibulum nec rhoncus sed, sodales quis ante.
    Vestibulum lorem tortor, sagittis ut dui blandit, pulvinar semper nibh. Morbi ac turpis a justo iaculis blandit sed sed eros.
    Vestibulum urna elit, consequat id pulvinar id, feugiat ac dui. Etiam non egestas velit.
    Proin molestie mi tortor, vel sollicitudin augue fringilla vel. In ipsum erat, convallis eget nulla at, ornare accumsan turpis.

    Nam tempus, justo sit amet gravida posuere, sapien odio elementum ligula, id consectetur nunc odio id justo.
    Maecenas tincidunt vel turpis vel pharetra. Maecenas interdum lectus nec pharetra malesuada.
    Etiam et lorem faucibus, rhoncus sem sed, ultricies purus. Suspendisse et sapien nunc.
    Maecenas vitae interdum eros. Donec sit amet gravida tellus, ut sagittis mauris.
    Duis aliquet magna sed augue feugiat posuere. Suspendisse vitae accumsan neque, volutpat pharetra purus.
    Vestibulum non mollis massa, nec elementum erat.
    Fusce facilisis, nibh non suscipit adipiscing, metus eros tristique dui, gravida mollis metus augue et augue.
    Quisque eleifend consectetur vehicula. Nullam euismod bibendum sapien, rutrum dignissim erat luctus non.

``references/first.rst``

.. code-block:: rest

    Rozdział drugi
    ==============

    Nulla neque metus, euismod id porta a, dapibus ac urna. Nunc cursus, risus et dictum eleifend,
    metus felis commodo libero, sit amet laoreet ante sapien et ligula. Sed in lectus lacinia,
    feugiat quam et, ornare nibh. Cras tincidunt ligula vel ligula luctus luctus. Nulla fringilla,
    orci nec volutpat porta, massa turpis porta risus, vitae rutrum felis orci sit amet nibh.
    Phasellus scelerisque magna non felis mollis ultricies. Suspendisse laoreet nunc est,
    nec tincidunt nunc tempor pellentesque. Nullam lobortis eros neque, at lobortis purus sagittis vitae.
    Aliquam pharetra lectus eget turpis venenatis, eu sagittis eros tempor. Nunc dignissim dapibus pretium.
    Etiam hendrerit massa quis metus lacinia, eget porta felis luctus. Phasellus cursus turpis nec scelerisque aliquam.
    Pellentesque egestas mi id tempus mattis.

    Maecenas vitae interdum eros. Donec sit amet gravida tellus, ut sagittis mauris.
    Duis aliquet magna sed augue feugiat posuere. Suspendisse vitae accumsan neque, volutpat pharetra purus.
    Vestibulum non mollis massa, nec elementum erat.
    Fusce facilisis, nibh non suscipit adipiscing, metus eros tristique dui, gravida mollis metus augue et augue.
    Quisque eleifend consectetur vehicula. Nullam euismod bibendum sapien, rutrum dignissim erat luctus non.


Następnie modyfikujemy ``index.rst``

.. code-block:: rest

    Moja dokumentacja
    =================

    Spis treści

    .. toctree::
       :maxdepth: 1

       references/first
       references/second


Teraz po przegenerowaniu dokumentacji:

.. code-block:: bash

    > sphinx-build -E -a -b html mydocs mydocshtml


Uzyskujemy na pierwszej stronie spis treści oraz dwie podstrony.

Dla przykłądu plik ``index.rst`` z bieżącej dokumentacji prezentuje się następująco:

.. literalinclude:: ../index.rst
    :language: rest
