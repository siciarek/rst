Kod języków programowania
-------------------------

Sphinx DocUtils zapewnia kolorowanie składni wielu języków programowania w oparciu o bibliotekę **Pygments**.

Strona projektu http://pygments.org

Wykaz wspieranych języków http://pygments.org/languages.

Wykaz wszystkich dostępnych lexerów http://pygments.org/docs/lexers.


Brain**ck na dobry początek
===========================

Przykład z http://pl.wikipedia.org/wiki/Brainfuck#Hello_World.21.

.. code-block:: brainfuck

    ++++++++++[>+++++++>++++++++++>+++>+<<<<-]>++.>+.
    +++++++..+++.>++.<<+++++++++++++++.>.+++.------.--------.>+.>.

.. code-block:: rst

    .. code-block:: brainfuck

        ++++++++++[>+++++++>++++++++++>+++>+<<<<-]>++.>+.
        +++++++..+++.>++.<<+++++++++++++++.>.+++.------.--------.>+.>.

.. code-block:: bf

    ++++++++++
    [
    >+++++++>++++++++++>+++>+<<<<-
    ] Na początek ustawiamy kilka przydatnych później wartości
    >++.               drukuje 'H'
    >+.                drukuje 'e'
    +++++++.           drukuje 'l'
    .                  drukuje 'l'
    +++.               drukuje 'o'
    >++.               spacja
    <<+++++++++++++++. drukuje 'W'
    >.                 drukuje 'o'
    +++.               drukuje 'r'
    ------.            drukuje 'l'
    --------.          drukuje 'd'
    >+.                drukuje '!'
    >.                 nowa linia

.. code-block:: rst

    .. code-block:: bf

        ++++++++++
        [
        >+++++++>++++++++++>+++>+<<<<-
        ] Na początek ustawiamy kilka przydatnych później wartości
        >++.               drukuje 'H'
        >+.                drukuje 'e'
        +++++++.           drukuje 'l'
        .                  drukuje 'l'
        +++.               drukuje 'o'
        >++.               spacja
        <<+++++++++++++++. drukuje 'W'
        >.                 drukuje 'o'
        +++.               drukuje 'r'
        ------.            drukuje 'l'
        --------.          drukuje 'd'
        >+.                drukuje '!'
        >.                 nowa linia

Kod inline
==========

.. code-block:: c

    #include <stdio.h>
    #include <stdlib.h>

    #define MESSAGE "Hello World!"

    void displayMessage(char* msg) {

        printf("%s\n", msg);
    }

    int main(int argc, char** argv) {

        displayMessage(MESSAGE);

        return EXIT_SUCCESS;
    }

.. code-block:: rst

    .. code-block:: c

        #include <stdio.h>
        #include <stdlib.h>

        #define MESSAGE "Hello World!"

        void displayMessage(char* msg) {

            printf("%s\n", msg);
        }

        int main(int argc, char** argv) {

            displayMessage(MESSAGE);

            return EXIT_SUCCESS;
        }



.. code-block:: guess

    #include <stdio.h>
    #include <stdlib.h>

    #define MESSAGE "Hello World!"

    void displayMessage(char* msg) {

        printf("%s\n", msg);
    }

    int main(int argc, char** argv) {

        displayMessage(MESSAGE);

        return EXIT_SUCCESS;
    }

.. code-block:: rst

    .. code-block:: guess

        #include <stdio.h>
        #include <stdlib.h>

        #define MESSAGE "Hello World!"

        void displayMessage(char* msg) {

            printf("%s\n", msg);
        }

        int main(int argc, char** argv) {

            displayMessage(MESSAGE);

            return EXIT_SUCCESS;
        }

Numeracja linii
^^^^^^^^^^^^^^^

.. code-block:: c
    :linenos:

    #include <stdio.h>
    #include <stdlib.h>

    #define MESSAGE "Hello World!"

    void displayMessage(char* msg) {

        printf("%s\n", msg);
    }

    int main(int argc, char** argv) {

        displayMessage(MESSAGE);

        return EXIT_SUCCESS;
    }

.. code-block:: rst

    .. code-block:: c
        :linenos:

        #include <stdio.h>
        #include <stdlib.h>

        #define MESSAGE "Hello World!"

        void displayMessage(char* msg) {

            printf("%s\n", msg);
        }

        int main(int argc, char** argv) {

            displayMessage(MESSAGE);

            return EXIT_SUCCESS;
        }

Wyróżnianie linii
^^^^^^^^^^^^^^^^^

.. code-block:: c
    :linenos:
    :emphasize-lines: 1,2,4,6-9

    #include <stdio.h>
    #include <stdlib.h>

    #define MESSAGE "Hello World!"

    void displayMessage(char* msg) {

        printf("%s\n", msg);
    }

    int main(int argc, char** argv) {

        displayMessage(MESSAGE);

        return EXIT_SUCCESS;
    }


.. code-block:: rst

    .. code-block:: c
        :linenos:
        :emphasize-lines: 1,2,4,6-9

        #include <stdio.h>
        #include <stdlib.h>

        #define MESSAGE "Hello World!"

        void displayMessage(char* msg) {

            printf("%s\n", msg);
        }

        int main(int argc, char** argv) {

            displayMessage(MESSAGE);

            return EXIT_SUCCESS;
        }

Kod z pliku
===========

Cały plik
^^^^^^^^^

.. literalinclude:: ../code/main.c
    :language: c
    :linenos:
    :emphasize-lines: 1,2,4,7-10

.. code-block:: rst

    .. literalinclude:: ../code/main.c
        :language: c
        :linenos:
        :emphasize-lines: 1,2,4,7-10

Wybrane linie
^^^^^^^^^^^^^

.. literalinclude:: ../code/main.c
    :language: c
    :lines: 7-10

.. code-block:: rst

    .. literalinclude:: ../code/main.c
        :language: c
        :lines: 7-10


Wybrany fragment kodu (z granicami)
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. literalinclude:: ../code/main.c
    :language: c
    :start-after: /* displayMessage */
    :end-before: /* end displayMessage */

.. code-block:: rst

    .. literalinclude:: ../code/main.c
        :language: c
        :start-after: /* displayMessage */
        :end-before: /* end displayMessage */


Uwagi
=====

W przypadku Twig-a blok ``.. code-block:: twig`` nie działa.

.. code-block:: rst

    .. code-block:: twig

        {{ 'John' ~ ' ' ~ 'Doe' ~ ' ' ~ date('Y-m-d') }}


Należy użyć lexera ``jinja``.

.. code-block:: jinja

    {{ 'John' ~ ' ' ~ 'Doe' ~ ' ' ~ date('Y-m-d') }}

.. code-block:: rst

    .. code-block:: jinja

        {{ 'John' ~ ' ' ~ 'Doe' ~ ' ' ~ date('Y-m-d') }}

A w przypadku kodu zagnieżdżonego w HTML ``.. code-block:: html+jinja``.

.. code-block:: html+jinja

    <h1>{{ 'John' ~ ' ' ~ 'Doe' ~ ' ' ~ date('Y-m-d') }}</h1>

    <ul>
    {% for a in 1..10 %}
        <li>{{ a ~ '. ' ~ 'John' ~ ' ' ~ 'Doe' ~ ' ' ~ date('Y-m-d') }}</li>
    {% enfor %}
    </ul>

.. code-block:: rst

    .. code-block:: html+jinja

        <h1>{{ 'John' ~ ' ' ~ 'Doe' ~ ' ' ~ date('Y-m-d') }}</h1>

        <ul>
        {% for a in 1..10 %}
            <li>{{ a ~ '. ' ~ 'John' ~ ' ' ~ 'Doe' ~ ' ' ~ date('Y-m-d') }}</li>
        {% enfor %}
        </ul>
