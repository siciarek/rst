Ilustracje
----------

Ilustracje podzielone są na obrazki ``.. image::`` i ilustracje ``.. figure::``.

Obrazek prosty
==============

.. image:: /images/flower.jpg

---------------------------------------------------------

.. image:: /images/flower.*


.. code-block:: rst

    .. image:: /images/flower.png

    ---------------------------------------------------------

    .. image:: /images/flower.*


Obrazek parametryzowany
=======================

.. image:: /images/flower.*
    :width: 640 px
    :height: 480 px
    :scale: 50 %
    :alt: Taki sobie kwiatek
    :align: center

.. code-block:: rst

    .. image:: /images/flower.*
        :width: 640 px
        :height: 480 px
        :scale: 50 %
        :alt: Taki sobie kwiatek
        :align: center

.. _trzeci:

Obrazek skalowany
=================

.. image:: /images/sunset.*
    :width: 640 px
    :height: 480 px
    :scale: 10 %

---------------------------------------------------------

.. image:: /images/sunset.*
    :width: 640 px
    :height: 480 px
    :scale: 50 %

---------------------------------------------------------

.. image:: /images/sunset.*
    :width: 640 px
    :height: 480 px
    :scale: 75 %

---------------------------------------------------------

.. image:: /images/sunset.*
    :width: 640 px
    :height: 480 px
    :scale: 100 %

---------------------------------------------------------

.. image:: /images/sunset.*
    :width: 640 px
    :height: 480 px
    :scale: 150 %

.. code-block:: rst

    .. image:: /images/sunset.*
        :width: 640 px
        :height: 480 px
        :scale: 10 %

    ---------------------------------------------------------

    .. image:: /images/sunset.*
        :width: 640 px
        :height: 480 px
        :scale: 50 %

    ---------------------------------------------------------

    .. image:: /images/sunset.*
        :width: 640 px
        :height: 480 px
        :scale: 75 %

    ---------------------------------------------------------

    .. image:: /images/sunset.*
        :width: 640 px
        :height: 480 px
        :scale: 100 %

    ---------------------------------------------------------

    .. image:: /images/sunset.*
        :width: 640 px
        :height: 480 px
        :scale: 150 %

Ilustracje
==========

Ilustracje są obiektami zawierającymi obrazek oraz opcjonalnie elementy ``caption`` i ``legend``.
W przypadku generowania dokumentacji tylko w formacie ``html`` nie różnią się od ``image``, w przypadku ``pdf``
element ``caption`` (pierwszy akapit pod definicją) dodstaje swój numer ilustracji.

.. figure:: /images/map.png
    :figwidth: 300 pt
    :width: 300 pt
    :alt: map to buried treasure

    This is the caption of the figure (a simple paragraph).

    The legend consists of all elements after the caption. In this
    case, the legend consists of this paragraph and the following
    table:

    +------------------------------+-----------------------+
    | Symbol                       | Meaning               |
    +==============================+=======================+
    | .. image:: /images/tent.png  | Campground            |
    +------------------------------+-----------------------+
    | .. image:: /images/waves.png | Waves                 |
    +------------------------------+-----------------------+
    | .. image:: /images/peak.png  | Mountain              |
    +------------------------------+-----------------------+

.. code-block:: rst

    .. figure:: /images/map.png
        :figwidth: 300 pt
        :width: 300 pt
        :alt: map to buried treasure

        This is the caption of the figure (a simple paragraph).

        The legend consists of all elements after the caption. In this
        case, the legend consists of this paragraph and the following
        table:

        +------------------------------+-----------------------+
        | Symbol                       | Meaning               |
        +==============================+=======================+
        | .. image:: /images/tent.png  | Campground            |
        +------------------------------+-----------------------+
        | .. image:: /images/waves.png | Waves                 |
        +------------------------------+-----------------------+
        | .. image:: /images/peak.png  | Mountain              |
        +------------------------------+-----------------------+

