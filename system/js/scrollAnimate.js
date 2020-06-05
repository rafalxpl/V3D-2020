function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*
 * ScrollAnimate v1.0.0 (2018-12-01)
 * The javascript library for animation scroll interactions.
 * (c) 2018 Hammer Garita (@hammergarita)
 * Project Website: http://scrollanimate.com
 * @version 1.0.0
 * @license Dual licensed under MIT license and GPL.
 * @author Hammer Garita - contacto@hgarita.com
 *
 * @file ScrollAnimate main library.
 */
(function (root, factory) {
  if (typeof define === 'function' && define.amd) {
    define(factory);
  } else if ((typeof exports === "undefined" ? "undefined" : _typeof(exports)) === 'object') {
    module.exports = factory;
  } else {
    root.ScrollAnimate = factory();
  }
})(this, function () {
  'use strict';

  var ScrollAnimate = {};
  /*
    * @usage
    * scrollAnimate.add(object)
    */

  ScrollAnimate.add = function (parametersObject) {
    /*
      * // passing options
      * scrollAnimate.add({
      *   selector: '.element',
      *   animationClassName: 'fadeInLeft',
      *   scroll: 'vertical
      *   offset: '50%',
      *   triggerOnce: true,
      *   disabled: ['mobile'],
      *   delay: '1s',
      *   duration: '4s',
      *   iteration-count: '1'
      * })
      *
      */

    /*
      * ----------------------------------------------------------------
      * Private vars
      * ----------------------------------------------------------------
      */
    var _elementObject;

    var _animationClassName;

    var _offset;

    var _scroll;

    var _triggerOnce;

    var _disabled = true;

    var _delay;

    var _duration;

    var _iterationCount;

    var _mobile;

    var _tablet;

    var _desktop;

    var _elementPosition;

    var _positionElementDisplayed;
    /*
     * ----------------------------------------------------------------
     * private functions
     * ----------------------------------------------------------------
     */
    // Valida las propiedades de Duration, Delay


    var validateAnimationPropertys = function validateAnimationPropertys(propertyName, propertyValue) {
      var _variable; // Verifica que se haya definido la propiedad


      if (propertyValue) {
        // Compara que contenga un numero entero
        isNaN(propertyValue) || propertyValue % 1 !== 0 ? function () {
          throw new TypeError("{".concat(propertyName, ": '").concat(propertyValue, "'} contiene un valor no valido."));
        }() : _variable = propertyValue;
      }

      return _variable;
    };
    /*
     * // Valida propiedades del Objeto (parameters)
     */


    var validateParametersObject = function validateParametersObject(parameters) {
      // Valida que parameters sea un objeto
      if (parameters instanceof Object && typeof parameters !== 'function') {
        /*
         * Valida que de haya definido la propiedad selector
         */
        if (parameters.selector) {
          // Obtiene los elementos del DOM
          _elementObject = document.querySelectorAll(parameters.selector); // Si no se encontraron elementos envia un error

          if (_elementObject === null || _elementObject.length === 0) (function () {
            throw new Error("No se encontro el elemento \"".concat(parameters.selector, "\""));
          })(); //
        } else {
          throw new Error('Se requiere la propiedad {selector:}');
        }
        /*
         * Valida que animationClassName no este vacio y sea un String
         */


        parameters.animationClassName !== 'undefined' && typeof parameters.animationClassName === 'string' ? _animationClassName = parameters.animationClassName : function () {
          throw new TypeError("{animationClassName: '".concat(parameters.animationClassName, "'} contiene un valor no valido o no se definio."));
        }();
        /*
         * Valida si se definio la propiedad offset
         */

        if (parameters.offset) {
          _offset = parseFloat(parameters.offset); // Comprueba que sea un valor valido

          isNaN(_offset) || _offset - Math.floor(_offset) !== 0 ? function () {
            throw new TypeError("{offset: '".concat(parameters.offset, "'} contiene un valor no valido."));
          }() : _offset /= 100.0; // Si no se definio Offset le asigna un valor de 10% por defecto
        } else {
          _offset = '.10';
        }
        /*
         * Valida si se definio la propiedad scroll
         */


        if (parameters.scroll) {
          // Comprueba que sea un valor valido
          parameters.scroll === 'horizontal' || parameters.scroll === 'vertical' ? _scroll = parameters.scroll : function () {
            throw new TypeError("{scroll: '".concat(parameters.scroll, "'} contiene un valor no valido."));
          }(); // Si no se definio scroll le asigna un valor de 'Vertical' por defecto
        } else {
          _scroll = 'Vertical';
        }
        /*
         * Valida si se definio la propiedad triggerOnce
         */


        if (parameters.triggerOnce !== 'undefined') {
          typeof parameters.triggerOnce === 'boolean' ? _triggerOnce = parameters.triggerOnce : function () {
            throw new TypeError("{triggerOnce: '".concat(parameters.triggerOnce, "'} contiene un valor no valido."));
          }(); // Si no se definio triggerOnce le asigna un valor de true por defecto
        } else {
          _triggerOnce = true;
        }
        /*
         * Valida si se definio la propiedad disabled
         */


        if (parameters.disabled) {
          parameters.disabled.forEach(function (_device) {
            if (_device === 'desktop') _desktop = true;
            if (_device === 'tablet') _tablet = true;
            if (_device === 'mobile') _mobile = true;
          }); // Si no se definio disabled le asigna un valor de false por defecto
        } else {
          _disabled = false;
        }
        /*
         * Valida si se definio la propiedad delay
         */


        _delay = validateAnimationPropertys('delay', parameters.delay);
        /*
         * Valida si se definio la propiedad duration
         */

        _duration = validateAnimationPropertys('duration', parameters.duration);
        /*
         * Valida si se definio la propiedad itareationCount
         */

        if (typeof parameters.iterationCount === 'number' || typeof parameters.iterationCount === 'string') {
          _iterationCount = parameters.iterationCount;
        } else {
          (function () {
            throw new TypeError("{iterationCount: '".concat(parameters.iterationCount, "'} contiene un valor no valido."));
          })();
        } // _iterationCount = validateAnimationPropertys('iterationCount', parameters.iterationCount)
        // Envia un error si no recibe un objeto

      } else {
        throw new Error('No es un objeto');
      }
    }; // Se ejecuta la funcion validateParametersObject


    validateParametersObject(parametersObject);
    /*
     * ----------------------------------------------------------------
     * Valida el tipo de dispositivo y el tamaÃ±o de pantalla. Si coincide detiene la ejecuciÃ³n
     *----------------------------------------------------------------
     */

    var animationResponsive = function animationResponsive() {
      if (_disabled) {
        if (_mobile && window.innerWidth <= 576) throw new Error('Las animaciones estan desactivadas en movil');
        if (_tablet && window.innerWidth <= 768 && window.innerWidth >= 576) throw new Error('Las animaciones estan desactivadas en tablet');
        if (_desktop && window.innerWidth >= 768) throw new Error('Las animaciones estan desactivadas en escritorio');
      }
    };

    animationResponsive();
    /*
     * ----------------------------------------------------------------
     * ConfiguraciÃ³n inicial
     *----------------------------------------------------------------
     */

    var initialSetup = function initialSetup() {
      Array.from(_elementObject).forEach(function (_selectedItem) {
        _elementPosition = _selectedItem.getBoundingClientRect();
        if (_duration) _selectedItem.style.animationDuration = _duration / 1000 + 's';
        if (_delay) _selectedItem.style.animationDelay = _delay / 1000 + 's';
        if (_iterationCount) _selectedItem.style.animationIterationCount = _iterationCount;

        switch (_scroll) {
          case 'vertical':
            _elementPosition.top <= (window.innerHeight || document.documentElement.clientHeight) ? _selectedItem.classList.add(_animationClassName) : _selectedItem.style.visibility = 'hidden';
            break;

          case 'horizontal':
            break;
        }
      });
    };

    initialSetup(_elementObject);
    /*
     * ----------------------------------------------------------------
     * Se ejecuta la animacion
     *----------------------------------------------------------------
     */

    window.addEventListener('scroll', function () {
      Array.from(_elementObject).forEach(function (_selectedItem) {
        // Obtiene las coordenadas del elemento
        _elementPosition = _selectedItem.getBoundingClientRect(); // Calcula la posiciÃ³n del elemento en relacion al offset

        _positionElementDisplayed = _elementPosition.top + _selectedItem.offsetHeight * _offset; // Verifica si el scroll es vertical u horizontal

        switch (_scroll) {
          case 'vertical':
            // Verifica que se encuentre dentro del espacio visible de la ventana
            if (_positionElementDisplayed <= (window.innerHeight || document.documentElement.clientHeight)) {
              // console.log('In the viewport!')
              _selectedItem.style.visibility = 'visible';

              _selectedItem.classList.add(_animationClassName);
            } else {
              // console.log('Not in the viewport...')
              if (!_triggerOnce && _elementPosition.top >= window.innerHeight) {
                _selectedItem.style.visibility = 'hidden';

                _selectedItem.classList.remove(_animationClassName);
              }
            }

            break;

          case 'horizontal':
            break;
        }
      });
    });
  };

  return ScrollAnimate;
});