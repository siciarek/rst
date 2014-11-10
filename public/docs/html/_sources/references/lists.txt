Listy
-----

Blok tekstu zacznający sięod "*", "+", "-" lub "•", po którym występuje spacja, jest elementem ``listy zwykłej``
(nazywanym również elementem ``listy nieuporządkowanej``).

Blok tekstu zaczynający się od:

    * liczb arabskich: 1, 2, 3, ... (nie ma górnego ograniczenia).
    * dużych liter: A, B, C, ..., Z.
    * małych liter: a, b, c, ..., z.
    * liczb rzymskich dużymi znakami: I, II, III, IV, ..., MMMMCMXCIX (4999).
    * liczb rzymskich małymi znakami: i, ii, iii, iv, ..., mmmmcmxcix (4999).

po którym następuje spacja jest elementem ``listy uporządkowanej``.

Istnieje również sposób automatycznego numerowania liczbami arabskimi, wtedy
blok powinien zaczynać się od znaków ``#.`` po których następuje spacja.

Lista zwykła
============

    * John Lennon
    * Paul McCartney
    * George Harrison
    * Ringo Starr

.. code-block:: rest

    * John Lennon
    * Paul McCartney
    * George Harrison
    * Ringo Starr

Lista uporządkowana
===================

    #. John Lennon
    #. Paul McCartney
    #. George Harrison
    #. Ringo Starr

.. code-block:: rest

    #. John Lennon
    #. Paul McCartney
    #. George Harrison
    #. Ringo Starr

Lista zagnieżdżona
==================

Zwykła
^^^^^^

    * John Lennon
        - gitara
        - śpiew
    * Paul McCartney
        - gitara
        - śpiew
    * George Harrison
        - gitara basowa
        - śpiew
    * Ringo Starr
        - perkusja
        - śpiew

.. code-block:: rest

    * John Lennon
        - gitara
        - śpiew
    * Paul McCartney
        - gitara
        - śpiew
    * George Harrison
        - gitara basowa
        - śpiew
    * Ringo Starr
        - perkusja
        - śpiew

Uporządkowana
^^^^^^^^^^^^^

    #. John Lennon
        #. gitara
        #. śpiew
    #. Paul McCartney
        #. gitara
        #. śpiew
    #. George Harrison
        #. gitara basowa
        #. śpiew
    #. Ringo Starr
        #. perkusja
        #. śpiew

.. code-block:: rest

    #. John Lennon
        #. gitara
        #. śpiew
    #. Paul McCartney
        #. gitara
        #. śpiew
    #. George Harrison
        #. gitara basowa
        #. śpiew
    #. Ringo Starr
        #. perkusja
        #. śpiew

Mieszana
^^^^^^^^

    * John Lennon
        #. gitara
        #. śpiew
    * Paul McCartney
        #. gitara
        #. śpiew
    * George Harrison
        #. gitara basowa
        #. śpiew
    * Ringo Starr
        #. perkusja
        #. śpiew

.. code-block:: rest

    * John Lennon
        #. gitara
        #. śpiew
    * Paul McCartney
        #. gitara
        #. śpiew
    * George Harrison
        #. gitara basowa
        #. śpiew
    * Ringo Starr
        #. perkusja
        #. śpiew

Lista definicji
===============

The Beatles
    Zespół rockowy z Liverpoolu, istniejący od 1960 (jako The Quarrymen od 1957) do 1970 roku.
    Według RIAA, jego członkowie są najpopularniejszymi muzykami wszech czasów.
    W historii amerykańskiego rynku fonograficznego nikt nie sprzedał więcej płyt niż oni.

Rolling Stones
   Angielski zespół rockowy, założony w Londynie w 1962 roku.

.. code-block:: rest

    The Beatles
        Zespół rockowy z Liverpoolu, istniejący od 1960 (jako The Quarrymen od 1957) do 1970 roku.
        Według RIAA, jego członkowie są najpopularniejszymi muzykami wszech czasów.
        W historii amerykańskiego rynku fonograficznego nikt nie sprzedał więcej płyt niż oni.

    Rolling Stones
       Angielski zespół rockowy, założony w Londynie w 1962 roku.

Zachowanie łamania lini
=======================

| The Beatles
| Zespół rockowy z Liverpoolu, istniejący od 1960 (jako The Quarrymen od 1957) do 1970 roku.
| Według RIAA, jego członkowie są najpopularniejszymi muzykami wszech czasów.
| W historii amerykańskiego rynku fonograficznego nikt nie sprzedał więcej płyt niż oni.

.. code-block:: rest

    | The Beatles
    | Zespół rockowy z Liverpoolu, istniejący od 1960 (jako The Quarrymen od 1957) do 1970 roku.
    | Według RIAA, jego członkowie są najpopularniejszymi muzykami wszech czasów.
    | W historii amerykańskiego rynku fonograficznego nikt nie sprzedał więcej płyt niż oni.

