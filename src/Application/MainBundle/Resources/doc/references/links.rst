Odnośniki
---------

.. _pierwszy:

Do urla
=======

Tutaj jest http://sescom.pl

.. code-block:: rst

    Tutaj jest http://sescom.pl


Tutaj jest `strona internetowa SESCOM S.A. <http://sescom.pl>`_

.. code-block:: rst

    Tutaj jest `strona internetowa SESCOM S.A. <http://sescom.pl>`_

.. _drugi:

Do urla przez parametr
======================

.. _link: http://sescom.pl?a=1&lot=of&parameter=s
.. _strona www: http://sescom.pl

    * Tutaj jest `link`_.
    * Tutaj jest `link`_.
    * Tutaj jest `link`_.
    * Tutaj jest `link`_.
    * Tutaj jest `link`_.
    * Tutaj jest `link`_.
    * Tutaj jest `strona www`_.
    * Tutaj jest `strona www`_.
    * Tutaj jest `strona www`_.
    * Tutaj jest `strona www`_.


.. code-block:: rst

    .. _link: http://sescom.pl?a=1&lot=of&parameter=s
    .. _strona www: http://sescom.pl

        * Tutaj jest `link`_.
        * Tutaj jest `link`_.
        * Tutaj jest `link`_.
        * Tutaj jest `link`_.
        * Tutaj jest `link`_.
        * Tutaj jest `link`_.
        * Tutaj jest `strona www`_.
        * Tutaj jest `strona www`_.
        * Tutaj jest `strona www`_.
        * Tutaj jest `strona www`_.

Do miejsca w dokumencie
=======================

Tu jest odnośnik pierwszy_

Tu jest odnośnik drugi_

Tu jest odnośnik :ref:`pierwszy`

Tu jest odnośnik :ref:`drugi`

Tu jest odnośnik :ref:`trzeci`

Tu jest odnośnik :ref:`pierwszy <pierwszy>`

Tu jest odnośnik :ref:`drugi <drugi>`

Tu jest odnośnik :ref:`trzeci <trzeci>`


.. code-block:: rst

    .. _pierwszy:

    Do urla
    =======

    .. _drugi:

    Do urla przez parametr
    ======================

    .. na stronie images.rst

    .. _trzeci:

    Obrazek skalowany
    =================

--------------------------------------------------------

.. code-block:: rst

    Tu jest odnośnik pierwszy_

    Tu jest odnośnik drugi_

    Tu jest odnośnik :ref:`pierwszy`

    Tu jest odnośnik :ref:`drugi`

    Tu jest odnośnik :ref:`trzeci`

    Tu jest odnośnik :ref:`pierwszy <pierwszy>`

    Tu jest odnośnik :ref:`drugi <drugi>`

    Tu jest odnośnik :ref:`trzeci <trzeci>`
