/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@emailjs/browser/es/api/sendPost.js"
/*!**********************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/api/sendPost.js ***!
  \**********************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   sendPost: () => (/* binding */ sendPost)
/* harmony export */ });
/* harmony import */ var _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../models/EmailJSResponseStatus */ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js");
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");


const sendPost = async (url, data, headers = {}) => {
    const response = await fetch(_store_store__WEBPACK_IMPORTED_MODULE_1__.store.origin + url, {
        method: 'POST',
        headers,
        body: data,
    });
    const message = await response.text();
    const responseStatus = new _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus(response.status, message);
    if (response.ok) {
        return responseStatus;
    }
    throw responseStatus;
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/errors/blockedEmailError/blockedEmailError.js"
/*!****************************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/errors/blockedEmailError/blockedEmailError.js ***!
  \****************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   blockedEmailError: () => (/* binding */ blockedEmailError)
/* harmony export */ });
/* harmony import */ var _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../models/EmailJSResponseStatus */ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js");

const blockedEmailError = () => {
    return new _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus(403, 'Forbidden');
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/errors/headlessError/headlessError.js"
/*!********************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/errors/headlessError/headlessError.js ***!
  \********************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   headlessError: () => (/* binding */ headlessError)
/* harmony export */ });
/* harmony import */ var _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../models/EmailJSResponseStatus */ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js");

const headlessError = () => {
    return new _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus(451, 'Unavailable For Headless Browser');
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/errors/limitRateError/limitRateError.js"
/*!**********************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/errors/limitRateError/limitRateError.js ***!
  \**********************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   limitRateError: () => (/* binding */ limitRateError)
/* harmony export */ });
/* harmony import */ var _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../models/EmailJSResponseStatus */ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js");

const limitRateError = () => {
    return new _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus(429, 'Too Many Requests');
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/index.js"
/*!***************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/index.js ***!
  \***************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   EmailJSResponseStatus: () => (/* reexport safe */ _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus),
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__),
/* harmony export */   init: () => (/* reexport safe */ _methods_init_init__WEBPACK_IMPORTED_MODULE_1__.init),
/* harmony export */   send: () => (/* reexport safe */ _methods_send_send__WEBPACK_IMPORTED_MODULE_2__.send),
/* harmony export */   sendForm: () => (/* reexport safe */ _methods_sendForm_sendForm__WEBPACK_IMPORTED_MODULE_3__.sendForm)
/* harmony export */ });
/* harmony import */ var _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./models/EmailJSResponseStatus */ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js");
/* harmony import */ var _methods_init_init__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./methods/init/init */ "./node_modules/@emailjs/browser/es/methods/init/init.js");
/* harmony import */ var _methods_send_send__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./methods/send/send */ "./node_modules/@emailjs/browser/es/methods/send/send.js");
/* harmony import */ var _methods_sendForm_sendForm__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./methods/sendForm/sendForm */ "./node_modules/@emailjs/browser/es/methods/sendForm/sendForm.js");





/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
    init: _methods_init_init__WEBPACK_IMPORTED_MODULE_1__.init,
    send: _methods_send_send__WEBPACK_IMPORTED_MODULE_2__.send,
    sendForm: _methods_sendForm_sendForm__WEBPACK_IMPORTED_MODULE_3__.sendForm,
    EmailJSResponseStatus: _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus,
});


/***/ },

/***/ "./node_modules/@emailjs/browser/es/methods/init/init.js"
/*!***************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/methods/init/init.js ***!
  \***************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   init: () => (/* binding */ init)
/* harmony export */ });
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");
/* harmony import */ var _utils_buildOptions_buildOptions__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../utils/buildOptions/buildOptions */ "./node_modules/@emailjs/browser/es/utils/buildOptions/buildOptions.js");


/**
 * EmailJS global SDK config
 * @param {object} options - the EmailJS global SDK config options
 * @param {string} origin - the non-default EmailJS origin
 */
const init = (options, origin = 'https://api.emailjs.com') => {
    if (!options)
        return;
    const opts = (0,_utils_buildOptions_buildOptions__WEBPACK_IMPORTED_MODULE_1__.buildOptions)(options);
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store.publicKey = opts.publicKey;
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store.blockHeadless = opts.blockHeadless;
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store.storageProvider = opts.storageProvider;
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store.blockList = opts.blockList;
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store.limitRate = opts.limitRate;
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store.origin = opts.origin || origin;
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/methods/send/send.js"
/*!***************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/methods/send/send.js ***!
  \***************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   send: () => (/* binding */ send)
/* harmony export */ });
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");
/* harmony import */ var _api_sendPost__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../api/sendPost */ "./node_modules/@emailjs/browser/es/api/sendPost.js");
/* harmony import */ var _utils_buildOptions_buildOptions__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../utils/buildOptions/buildOptions */ "./node_modules/@emailjs/browser/es/utils/buildOptions/buildOptions.js");
/* harmony import */ var _utils_validateParams_validateParams__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../utils/validateParams/validateParams */ "./node_modules/@emailjs/browser/es/utils/validateParams/validateParams.js");
/* harmony import */ var _utils_validateTemplateParams_validateTemplateParams__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../utils/validateTemplateParams/validateTemplateParams */ "./node_modules/@emailjs/browser/es/utils/validateTemplateParams/validateTemplateParams.js");
/* harmony import */ var _utils_isHeadless_isHeadless__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../utils/isHeadless/isHeadless */ "./node_modules/@emailjs/browser/es/utils/isHeadless/isHeadless.js");
/* harmony import */ var _errors_headlessError_headlessError__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../errors/headlessError/headlessError */ "./node_modules/@emailjs/browser/es/errors/headlessError/headlessError.js");
/* harmony import */ var _utils_isBlockedValueInParams_isBlockedValueInParams__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../utils/isBlockedValueInParams/isBlockedValueInParams */ "./node_modules/@emailjs/browser/es/utils/isBlockedValueInParams/isBlockedValueInParams.js");
/* harmony import */ var _errors_blockedEmailError_blockedEmailError__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../errors/blockedEmailError/blockedEmailError */ "./node_modules/@emailjs/browser/es/errors/blockedEmailError/blockedEmailError.js");
/* harmony import */ var _utils_isLimitRateHit_isLimitRateHit__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../utils/isLimitRateHit/isLimitRateHit */ "./node_modules/@emailjs/browser/es/utils/isLimitRateHit/isLimitRateHit.js");
/* harmony import */ var _errors_limitRateError_limitRateError__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../../errors/limitRateError/limitRateError */ "./node_modules/@emailjs/browser/es/errors/limitRateError/limitRateError.js");











/**
 * Send a template to the specific EmailJS service
 * @param {string} serviceID - the EmailJS service ID
 * @param {string} templateID - the EmailJS template ID
 * @param {object} templateParams - the template params, what will be set to the EmailJS template
 * @param {object} options - the EmailJS SDK config options
 * @returns {Promise<EmailJSResponseStatus>}
 */
const send = async (serviceID, templateID, templateParams, options) => {
    const opts = (0,_utils_buildOptions_buildOptions__WEBPACK_IMPORTED_MODULE_2__.buildOptions)(options);
    const publicKey = opts.publicKey || _store_store__WEBPACK_IMPORTED_MODULE_0__.store.publicKey;
    const blockHeadless = opts.blockHeadless || _store_store__WEBPACK_IMPORTED_MODULE_0__.store.blockHeadless;
    const storageProvider = opts.storageProvider || _store_store__WEBPACK_IMPORTED_MODULE_0__.store.storageProvider;
    const blockList = { ..._store_store__WEBPACK_IMPORTED_MODULE_0__.store.blockList, ...opts.blockList };
    const limitRate = { ..._store_store__WEBPACK_IMPORTED_MODULE_0__.store.limitRate, ...opts.limitRate };
    if (blockHeadless && (0,_utils_isHeadless_isHeadless__WEBPACK_IMPORTED_MODULE_5__.isHeadless)(navigator)) {
        return Promise.reject((0,_errors_headlessError_headlessError__WEBPACK_IMPORTED_MODULE_6__.headlessError)());
    }
    (0,_utils_validateParams_validateParams__WEBPACK_IMPORTED_MODULE_3__.validateParams)(publicKey, serviceID, templateID);
    (0,_utils_validateTemplateParams_validateTemplateParams__WEBPACK_IMPORTED_MODULE_4__.validateTemplateParams)(templateParams);
    if (templateParams && (0,_utils_isBlockedValueInParams_isBlockedValueInParams__WEBPACK_IMPORTED_MODULE_7__.isBlockedValueInParams)(blockList, templateParams)) {
        return Promise.reject((0,_errors_blockedEmailError_blockedEmailError__WEBPACK_IMPORTED_MODULE_8__.blockedEmailError)());
    }
    if (await (0,_utils_isLimitRateHit_isLimitRateHit__WEBPACK_IMPORTED_MODULE_9__.isLimitRateHit)(location.pathname, limitRate, storageProvider)) {
        return Promise.reject((0,_errors_limitRateError_limitRateError__WEBPACK_IMPORTED_MODULE_10__.limitRateError)());
    }
    const params = {
        lib_version: '4.4.1',
        user_id: publicKey,
        service_id: serviceID,
        template_id: templateID,
        template_params: templateParams,
    };
    return (0,_api_sendPost__WEBPACK_IMPORTED_MODULE_1__.sendPost)('/api/v1.0/email/send', JSON.stringify(params), {
        'Content-type': 'application/json',
    });
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/methods/sendForm/sendForm.js"
/*!***********************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/methods/sendForm/sendForm.js ***!
  \***********************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   sendForm: () => (/* binding */ sendForm)
/* harmony export */ });
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");
/* harmony import */ var _api_sendPost__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../api/sendPost */ "./node_modules/@emailjs/browser/es/api/sendPost.js");
/* harmony import */ var _utils_buildOptions_buildOptions__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../utils/buildOptions/buildOptions */ "./node_modules/@emailjs/browser/es/utils/buildOptions/buildOptions.js");
/* harmony import */ var _utils_validateForm_validateForm__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../utils/validateForm/validateForm */ "./node_modules/@emailjs/browser/es/utils/validateForm/validateForm.js");
/* harmony import */ var _utils_validateParams_validateParams__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../utils/validateParams/validateParams */ "./node_modules/@emailjs/browser/es/utils/validateParams/validateParams.js");
/* harmony import */ var _utils_isHeadless_isHeadless__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../utils/isHeadless/isHeadless */ "./node_modules/@emailjs/browser/es/utils/isHeadless/isHeadless.js");
/* harmony import */ var _errors_headlessError_headlessError__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../errors/headlessError/headlessError */ "./node_modules/@emailjs/browser/es/errors/headlessError/headlessError.js");
/* harmony import */ var _utils_isBlockedValueInParams_isBlockedValueInParams__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../utils/isBlockedValueInParams/isBlockedValueInParams */ "./node_modules/@emailjs/browser/es/utils/isBlockedValueInParams/isBlockedValueInParams.js");
/* harmony import */ var _errors_blockedEmailError_blockedEmailError__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../errors/blockedEmailError/blockedEmailError */ "./node_modules/@emailjs/browser/es/errors/blockedEmailError/blockedEmailError.js");
/* harmony import */ var _utils_isLimitRateHit_isLimitRateHit__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../utils/isLimitRateHit/isLimitRateHit */ "./node_modules/@emailjs/browser/es/utils/isLimitRateHit/isLimitRateHit.js");
/* harmony import */ var _errors_limitRateError_limitRateError__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../../errors/limitRateError/limitRateError */ "./node_modules/@emailjs/browser/es/errors/limitRateError/limitRateError.js");











const findHTMLForm = (form) => {
    return typeof form === 'string' ? document.querySelector(form) : form;
};
/**
 * Send a form the specific EmailJS service
 * @param {string} serviceID - the EmailJS service ID
 * @param {string} templateID - the EmailJS template ID
 * @param {string | HTMLFormElement} form - the form element or selector
 * @param {object} options - the EmailJS SDK config options
 * @returns {Promise<EmailJSResponseStatus>}
 */
const sendForm = async (serviceID, templateID, form, options) => {
    const opts = (0,_utils_buildOptions_buildOptions__WEBPACK_IMPORTED_MODULE_2__.buildOptions)(options);
    const publicKey = opts.publicKey || _store_store__WEBPACK_IMPORTED_MODULE_0__.store.publicKey;
    const blockHeadless = opts.blockHeadless || _store_store__WEBPACK_IMPORTED_MODULE_0__.store.blockHeadless;
    const storageProvider = _store_store__WEBPACK_IMPORTED_MODULE_0__.store.storageProvider || opts.storageProvider;
    const blockList = { ..._store_store__WEBPACK_IMPORTED_MODULE_0__.store.blockList, ...opts.blockList };
    const limitRate = { ..._store_store__WEBPACK_IMPORTED_MODULE_0__.store.limitRate, ...opts.limitRate };
    if (blockHeadless && (0,_utils_isHeadless_isHeadless__WEBPACK_IMPORTED_MODULE_5__.isHeadless)(navigator)) {
        return Promise.reject((0,_errors_headlessError_headlessError__WEBPACK_IMPORTED_MODULE_6__.headlessError)());
    }
    const currentForm = findHTMLForm(form);
    (0,_utils_validateParams_validateParams__WEBPACK_IMPORTED_MODULE_4__.validateParams)(publicKey, serviceID, templateID);
    (0,_utils_validateForm_validateForm__WEBPACK_IMPORTED_MODULE_3__.validateForm)(currentForm);
    const formData = new FormData(currentForm);
    if ((0,_utils_isBlockedValueInParams_isBlockedValueInParams__WEBPACK_IMPORTED_MODULE_7__.isBlockedValueInParams)(blockList, formData)) {
        return Promise.reject((0,_errors_blockedEmailError_blockedEmailError__WEBPACK_IMPORTED_MODULE_8__.blockedEmailError)());
    }
    if (await (0,_utils_isLimitRateHit_isLimitRateHit__WEBPACK_IMPORTED_MODULE_9__.isLimitRateHit)(location.pathname, limitRate, storageProvider)) {
        return Promise.reject((0,_errors_limitRateError_limitRateError__WEBPACK_IMPORTED_MODULE_10__.limitRateError)());
    }
    formData.append('lib_version', '4.4.1');
    formData.append('service_id', serviceID);
    formData.append('template_id', templateID);
    formData.append('user_id', publicKey);
    return (0,_api_sendPost__WEBPACK_IMPORTED_MODULE_1__.sendPost)('/api/v1.0/email/send-form', formData);
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js"
/*!**************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js ***!
  \**************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   EmailJSResponseStatus: () => (/* binding */ EmailJSResponseStatus)
/* harmony export */ });
class EmailJSResponseStatus {
    constructor(_status = 0, _text = 'Network Error') {
        this.status = _status;
        this.text = _text;
    }
}


/***/ },

/***/ "./node_modules/@emailjs/browser/es/store/store.js"
/*!*********************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/store/store.js ***!
  \*********************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   store: () => (/* binding */ store)
/* harmony export */ });
/* harmony import */ var _utils_createWebStorage_createWebStorage__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils/createWebStorage/createWebStorage */ "./node_modules/@emailjs/browser/es/utils/createWebStorage/createWebStorage.js");

const store = {
    origin: 'https://api.emailjs.com',
    blockHeadless: false,
    storageProvider: (0,_utils_createWebStorage_createWebStorage__WEBPACK_IMPORTED_MODULE_0__.createWebStorage)(),
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/buildOptions/buildOptions.js"
/*!*****************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/buildOptions/buildOptions.js ***!
  \*****************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   buildOptions: () => (/* binding */ buildOptions)
/* harmony export */ });
const buildOptions = (options) => {
    if (!options)
        return {};
    // support compatibility with SDK v3
    if (typeof options === 'string') {
        return {
            publicKey: options,
        };
    }
    // eslint-disable-next-line @typescript-eslint/no-base-to-string
    if (options.toString() === '[object Object]') {
        return options;
    }
    return {};
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/createWebStorage/createWebStorage.js"
/*!*************************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/createWebStorage/createWebStorage.js ***!
  \*************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   createWebStorage: () => (/* binding */ createWebStorage)
/* harmony export */ });
const createWebStorage = () => {
    if (typeof localStorage === 'undefined')
        return;
    return {
        get: (key) => Promise.resolve(localStorage.getItem(key)),
        set: (key, value) => Promise.resolve(localStorage.setItem(key, value)),
        remove: (key) => Promise.resolve(localStorage.removeItem(key)),
    };
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/isBlockedValueInParams/isBlockedValueInParams.js"
/*!*************************************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/isBlockedValueInParams/isBlockedValueInParams.js ***!
  \*************************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   isBlockedValueInParams: () => (/* binding */ isBlockedValueInParams)
/* harmony export */ });
/* harmony import */ var _validateBlockListParams_validateBlockListParams__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../validateBlockListParams/validateBlockListParams */ "./node_modules/@emailjs/browser/es/utils/validateBlockListParams/validateBlockListParams.js");

const isBlockListDisabled = (options) => {
    return !options.list?.length || !options.watchVariable;
};
const getValue = (data, name) => {
    return data instanceof FormData ? data.get(name) : data[name];
};
const isBlockedValueInParams = (options, params) => {
    if (isBlockListDisabled(options))
        return false;
    (0,_validateBlockListParams_validateBlockListParams__WEBPACK_IMPORTED_MODULE_0__.validateBlockListParams)(options.list, options.watchVariable);
    const value = getValue(params, options.watchVariable);
    if (typeof value !== 'string')
        return false;
    return options.list.includes(value);
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/isHeadless/isHeadless.js"
/*!*************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/isHeadless/isHeadless.js ***!
  \*************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   isHeadless: () => (/* binding */ isHeadless)
/* harmony export */ });
const isHeadless = (navigator) => {
    return navigator.webdriver || !navigator.languages || navigator.languages.length === 0;
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/isLimitRateHit/isLimitRateHit.js"
/*!*********************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/isLimitRateHit/isLimitRateHit.js ***!
  \*********************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   isLimitRateHit: () => (/* binding */ isLimitRateHit)
/* harmony export */ });
/* harmony import */ var _validateLimitRateParams_validateLimitRateParams__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../validateLimitRateParams/validateLimitRateParams */ "./node_modules/@emailjs/browser/es/utils/validateLimitRateParams/validateLimitRateParams.js");

const getLeftTime = async (id, throttle, storage) => {
    const lastTime = Number((await storage.get(id)) || 0);
    return throttle - Date.now() + lastTime;
};
const isLimitRateHit = async (defaultID, options, storage) => {
    if (!options.throttle || !storage) {
        return false;
    }
    (0,_validateLimitRateParams_validateLimitRateParams__WEBPACK_IMPORTED_MODULE_0__.validateLimitRateParams)(options.throttle, options.id);
    const id = options.id || defaultID;
    const leftTime = await getLeftTime(id, options.throttle, storage);
    if (leftTime > 0) {
        return true;
    }
    await storage.set(id, Date.now().toString());
    return false;
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/validateBlockListParams/validateBlockListParams.js"
/*!***************************************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/validateBlockListParams/validateBlockListParams.js ***!
  \***************************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   validateBlockListParams: () => (/* binding */ validateBlockListParams)
/* harmony export */ });
const validateBlockListParams = (list, watchVariable) => {
    if (!Array.isArray(list)) {
        throw 'The BlockList list has to be an array';
    }
    if (typeof watchVariable !== 'string') {
        throw 'The BlockList watchVariable has to be a string';
    }
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/validateForm/validateForm.js"
/*!*****************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/validateForm/validateForm.js ***!
  \*****************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   validateForm: () => (/* binding */ validateForm)
/* harmony export */ });
const validateForm = (form) => {
    if (!form || form.nodeName !== 'FORM') {
        throw 'The 3rd parameter is expected to be the HTML form element or the style selector of the form';
    }
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/validateLimitRateParams/validateLimitRateParams.js"
/*!***************************************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/validateLimitRateParams/validateLimitRateParams.js ***!
  \***************************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   validateLimitRateParams: () => (/* binding */ validateLimitRateParams)
/* harmony export */ });
const validateLimitRateParams = (throttle, id) => {
    if (typeof throttle !== 'number' || throttle < 0) {
        throw 'The LimitRate throttle has to be a positive number';
    }
    if (id && typeof id !== 'string') {
        throw 'The LimitRate ID has to be a non-empty string';
    }
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/validateParams/validateParams.js"
/*!*********************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/validateParams/validateParams.js ***!
  \*********************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   validateParams: () => (/* binding */ validateParams)
/* harmony export */ });
const validateParams = (publicKey, serviceID, templateID) => {
    if (!publicKey || typeof publicKey !== 'string') {
        throw 'The public key is required. Visit https://dashboard.emailjs.com/admin/account';
    }
    if (!serviceID || typeof serviceID !== 'string') {
        throw 'The service ID is required. Visit https://dashboard.emailjs.com/admin';
    }
    if (!templateID || typeof templateID !== 'string') {
        throw 'The template ID is required. Visit https://dashboard.emailjs.com/admin/templates';
    }
};


/***/ },

/***/ "./node_modules/@emailjs/browser/es/utils/validateTemplateParams/validateTemplateParams.js"
/*!*************************************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/validateTemplateParams/validateTemplateParams.js ***!
  \*************************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   validateTemplateParams: () => (/* binding */ validateTemplateParams)
/* harmony export */ });
const validateTemplateParams = (templateParams) => {
    // eslint-disable-next-line @typescript-eslint/no-base-to-string
    if (templateParams && templateParams.toString() !== '[object Object]') {
        throw 'The template params have to be the object. Visit https://www.emailjs.com/docs/sdk/send/';
    }
};


/***/ },

/***/ "./src/scripts/ContactForm.js"
/*!************************************!*\
  !*** ./src/scripts/ContactForm.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _emailjs_browser__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @emailjs/browser */ "./node_modules/@emailjs/browser/es/index.js");
/* harmony import */ var _Shared__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Shared */ "./src/scripts/Shared.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




// ================================================================
// ContactForm.js — formulario reutilizable (EmailJS + reCAPTCHA v3).
// Se monta desde PHP con:
//   <div class="js-bc-contact-form" data-variant="estimate|contact" data-id="..."></div>
// "estimate": tarjeta oscura de la Home (zip + servicio).
// "contact":  floating labels de Contact Us (mensaje libre).
// ================================================================

const EMAILJS_PUBLIC_KEY = "jouOOfXfhaIpXnqML";
const EMAILJS_SERVICE_ID = "service_g0f8bxk";
const EMAILJS_TEMPLATE_ID = "template_vjswkmr";
const EMAILJS_AUTOREPLY_TEMPLATE_ID = "template_8omszme";
const RECAPTCHA_SITE_KEY = "6Le1SIstAAAAAMpvWWIvOsnq4Jj488h6SmhTffRe";
const FORM_ORNAMENT = "/wp-content/uploads/2026/07/Graficos-10.png";
const SERVICE_OPTIONS = [..._Shared__WEBPACK_IMPORTED_MODULE_2__.SERVICES.map(s => s.label), "Other"];
const COPY = {
  estimate: {
    success: "Thank you. Your request has been sent successfully. We'll be in touch soon.",
    error: "Something went wrong while sending your request. Please try again."
  },
  contact: {
    success: "Thank you. Your message has been sent successfully. We'll be in touch soon.",
    error: "Something went wrong while sending your message. Please try again, or call us directly."
  }
};
_emailjs_browser__WEBPACK_IMPORTED_MODULE_1__["default"].init({
  publicKey: EMAILJS_PUBLIC_KEY
});

// carga el script de reCAPTCHA una sola vez, aunque haya varios formularios en la página
let recaptchaPromise = null;
function loadRecaptcha() {
  if (!recaptchaPromise) {
    recaptchaPromise = new Promise((resolve, reject) => {
      const script = document.createElement("script");
      script.src = "https://www.google.com/recaptcha/api.js?render=" + RECAPTCHA_SITE_KEY;
      script.async = true;
      script.onload = () => window.grecaptcha.ready(() => resolve(window.grecaptcha));
      script.onerror = () => {
        recaptchaPromise = null;
        reject(new Error("recaptcha"));
      };
      document.head.appendChild(script);
    });
  }
  return recaptchaPromise;
}
function ContactForm(props) {
  const variant = props.variant === "contact" ? "contact" : "estimate";
  const autoId = (0,react__WEBPACK_IMPORTED_MODULE_0__.useId)();
  const baseId = props.id || autoId;
  const formRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const [sending, setSending] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [status, setStatus] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null); // { type: "success" | "error", message }

  // precargar reCAPTCHA cuando el usuario empieza a interactuar, no en cada page load
  function warmUp() {
    loadRecaptcha().catch(() => {});
  }
  async function handleSubmit(e) {
    e.preventDefault();
    setStatus(null);
    const form = formRef.current;
    const data = new FormData(form);

    // honeypot: si el campo oculto viene lleno, es un bot -> cortar en silencio
    if (data.get("hp_name")) return;
    if (!data.get("policy")) {
      return setStatus({
        type: "error",
        message: "Please accept the Privacy Policy and Terms & Conditions before submitting."
      });
    }
    setSending(true);
    let captchaResponse;
    try {
      const grecaptcha = await loadRecaptcha();
      captchaResponse = await grecaptcha.execute(RECAPTCHA_SITE_KEY, {
        action: "submit"
      });
    } catch {
      setSending(false);
      return setStatus({
        type: "error",
        message: "reCAPTCHA failed to load. Please refresh the page and try again."
      });
    }
    const formData = {
      name: String(data.get("full_name") || "").trim(),
      phone: String(data.get("phone") || "").trim(),
      email: String(data.get("email") || "").trim(),
      "g-recaptcha-response": captchaResponse
    };
    if (variant === "estimate") {
      formData.zip = String(data.get("zip") || "").trim();
      formData.service = data.get("service");
    } else {
      formData.message = String(data.get("message") || "").trim();
    }
    try {
      await _emailjs_browser__WEBPACK_IMPORTED_MODULE_1__["default"].send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, formData);
    } catch {
      setSending(false);
      return setStatus({
        type: "error",
        message: COPY[variant].error
      });
    }

    // el auto-reply al cliente es secundario: si falla, el mensaje al negocio ya llegó
    _emailjs_browser__WEBPACK_IMPORTED_MODULE_1__["default"].send(EMAILJS_SERVICE_ID, EMAILJS_AUTOREPLY_TEMPLATE_ID, formData).catch(() => {});
    form.reset();
    setSending(false);
    setStatus({
      type: "success",
      message: COPY[variant].success
    });
  }

  // Los mensajes solo existen en el DOM después del submit: Google Tag Manager detecta el lead
  // con un trigger "Element Visibility" sobre #gtm-form-success (con "Observe DOM changes").
  // Al montarse solo tras el envío, el ID no se duplica aunque haya varios formularios en la página.
  function renderMessages() {
    if (!status) return null;
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
      id: status.type === "success" ? "gtm-form-success" : "gtm-form-error",
      className: "bc-form-message bc-form-message--" + status.type + " is-visible",
      role: status.type === "error" ? "alert" : "status",
      children: status.message
    });
  }
  function renderHoneypot() {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
      className: "bc-hp-field",
      "aria-hidden": "true",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
        htmlFor: baseId + "_hp",
        children: "Leave this field empty"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
        id: baseId + "_hp",
        type: "text",
        name: "hp_name",
        tabIndex: "-1",
        autoComplete: "off"
      })]
    });
  }
  function renderPolicyText() {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("span", {
      children: ["I agree to the ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("a", {
        href: "/privacy-policy",
        children: "Privacy Policy"
      }), " and ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("a", {
        href: "/terms-and-conditions",
        children: "Terms & Conditions"
      }), "."]
    });
  }
  if (variant === "contact") {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("form", {
      id: baseId,
      ref: formRef,
      className: "bc-float-form relative z-10 mt-8",
      onSubmit: handleSubmit,
      onFocus: warmUp,
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
        className: "bc-float-field",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
          id: baseId + "_name",
          type: "text",
          name: "full_name",
          placeholder: " ",
          required: true
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
          htmlFor: baseId + "_name",
          children: "Full Name *"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
        className: "bc-float-field",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
          id: baseId + "_phone",
          type: "tel",
          name: "phone",
          placeholder: " ",
          required: true
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
          htmlFor: baseId + "_phone",
          children: "Phone Number *"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
        className: "bc-float-field",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
          id: baseId + "_email",
          type: "email",
          name: "email",
          placeholder: " ",
          required: true
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
          htmlFor: baseId + "_email",
          children: "Email Address *"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
        className: "bc-float-field",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("textarea", {
          id: baseId + "_message",
          name: "message",
          rows: "4",
          placeholder: " "
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
          htmlFor: baseId + "_message",
          children: "Message"
        })]
      }), renderHoneypot(), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("label", {
        className: "bc-float-check",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
          type: "checkbox",
          name: "policy",
          required: true
        }), renderPolicyText()]
      }), renderMessages(), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("button", {
        type: "submit",
        disabled: sending,
        className: "bc-btn bc-btn-green bc-magnetic mt-2 inline-flex w-full items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("span", {
          children: sending ? "Sending..." : "Send Message"
        })
      })]
    });
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
    className: "bc-formcard bc-tilt",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("img", {
      src: FORM_ORNAMENT,
      alt: "",
      className: "bc-formcard__ornament",
      "aria-hidden": "true"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("form", {
      id: baseId,
      ref: formRef,
      className: "bc-estimate-form",
      onSubmit: handleSubmit,
      onFocus: warmUp,
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("p", {
        className: "bc-estimate-form__eyebrow",
        children: "Request a Free Estimate"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("h3", {
        className: "bc-estimate-form__title",
        children: "Tell us about your property."
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("p", {
        className: "bc-estimate-form__trust",
        children: "15+ Years in Arizona \xB7 HOA-Approved \xB7 100% Satisfaction Guaranteed"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
        className: "bc-estimate-form__grid",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
          className: "bc-estimate-form__field",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
            htmlFor: baseId + "_name",
            children: "Full Name *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
            id: baseId + "_name",
            type: "text",
            name: "full_name",
            placeholder: "Your full name",
            required: true
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
          className: "bc-estimate-form__field",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
            htmlFor: baseId + "_phone",
            children: "Phone Number *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
            id: baseId + "_phone",
            type: "tel",
            name: "phone",
            placeholder: "(480) 229-4950",
            required: true
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
          className: "bc-estimate-form__field",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
            htmlFor: baseId + "_email",
            children: "Email Address *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
            id: baseId + "_email",
            type: "email",
            name: "email",
            placeholder: "you@example.com",
            required: true
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
          className: "bc-estimate-form__field",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
            htmlFor: baseId + "_zip",
            children: "Property ZIP *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
            id: baseId + "_zip",
            type: "text",
            name: "zip",
            placeholder: "85268",
            inputMode: "numeric",
            maxLength: "5",
            required: true
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
          className: "bc-estimate-form__field bc-estimate-form__field--full",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("label", {
            htmlFor: baseId + "_service",
            children: "Service Needed *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("select", {
            id: baseId + "_service",
            name: "service",
            required: true,
            defaultValue: "",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("option", {
              value: "",
              children: "Select a service"
            }), SERVICE_OPTIONS.map(option => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("option", {
              value: option,
              children: option
            }, option))]
          })]
        })]
      }), renderHoneypot(), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("p", {
        className: "bc-estimate-form__micro",
        children: "We'll review your request and reach out within 24\u201348 hours."
      }), renderMessages(), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("label", {
        className: "bc-estimate-form__check",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
          type: "checkbox",
          name: "policy",
          required: true
        }), renderPolicyText()]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("button", {
        type: "submit",
        disabled: sending,
        className: "bc-btn bc-btn-green bc-magnetic bc-estimate-form__submit",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("span", {
          children: sending ? "Sending..." : "Get My Free Estimate"
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ },

/***/ "./src/scripts/CookieConsent.js"
/*!**************************************!*\
  !*** ./src/scripts/CookieConsent.js ***!
  \**************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ================================================================
// CookieConsent.js — banner + modal de preferencias de cookies.
// Se monta desde footer.php en <div id="bc-cookie-consent"></div>.
// Cualquier elemento con la clase .js-bc-cookie-settings abre el modal
// (link "Cookie Settings" del footer, botón en Privacy Policy, etc.).
//
// La preferencia se guarda en la cookie "bc_cookie_consent" (1 año) y se
// envía a Google Consent Mode v2. Los defaults ("denied") se declaran en
// functions.php (bc_consent_mode_defaults) antes de que cargue GTM.
// En GTM, cada cambio dispara el evento "bc_consent_update".
// ================================================================

const COOKIE_NAME = "bc_cookie_consent";
// Subir la versión obliga a todos a volver a elegir (p. ej. si se agrega una categoría nueva).
const CONSENT_VERSION = 1;
const MAX_AGE_SECONDS = 60 * 60 * 24 * 365;
const OPEN_SELECTOR = ".js-bc-cookie-settings";
const CATEGORIES = [{
  key: "necessary",
  title: "Strictly Necessary",
  description: "Required for the website to work properly and to remember your cookie choices. These cannot be turned off.",
  locked: true
}, {
  key: "analytics",
  title: "Analytics",
  description: "Help us understand how visitors find and use our site (for example, Google Analytics) so we can improve it."
}, {
  key: "marketing",
  title: "Marketing",
  description: "Help us measure our advertising and show relevant ads on other platforms such as Google and Meta."
}];
const DEFAULT_PREFS = {
  analytics: false,
  marketing: false
};
function readConsent() {
  try {
    const match = document.cookie.match(new RegExp("(?:^|; )" + COOKIE_NAME + "=([^;]*)"));
    if (!match) return null;
    const value = JSON.parse(decodeURIComponent(match[1]));
    return value && value.v === CONSENT_VERSION ? value : null;
  } catch (e) {
    return null;
  }
}
function writeConsent(prefs) {
  const value = {
    v: CONSENT_VERSION,
    analytics: !!prefs.analytics,
    marketing: !!prefs.marketing,
    ts: Date.now()
  };
  const secure = window.location.protocol === "https:" ? "; Secure" : "";
  document.cookie = COOKIE_NAME + "=" + encodeURIComponent(JSON.stringify(value)) + "; Max-Age=" + MAX_AGE_SECONDS + "; Path=/; SameSite=Lax" + secure;
  return value;
}
function applyConsent(consent) {
  window.dataLayer = window.dataLayer || [];
  // gtag() tiene que empujar el objeto "arguments", no un array, para que Consent Mode lo reconozca
  const gtag = window.gtag || function () {
    window.dataLayer.push(arguments);
  };
  const marketing = consent.marketing ? "granted" : "denied";
  gtag("consent", "update", {
    analytics_storage: consent.analytics ? "granted" : "denied",
    ad_storage: marketing,
    ad_user_data: marketing,
    ad_personalization: marketing
  });
  window.dataLayer.push({
    event: "bc_consent_update",
    bc_consent_analytics: consent.analytics,
    bc_consent_marketing: consent.marketing
  });
}
function getFocusable(container) {
  return Array.from(container.querySelectorAll('button:not([disabled]), a[href], input:not([disabled]), [tabindex]:not([tabindex="-1"])'));
}
function Toggle(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
    type: "button",
    role: "switch",
    id: props.id,
    "aria-checked": props.checked,
    "aria-labelledby": props.labelledBy,
    "aria-describedby": props.describedBy,
    disabled: props.disabled,
    className: "bc-cookie-switch" + (props.checked ? " is-on" : ""),
    onClick: props.onChange,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      className: "bc-cookie-switch__thumb",
      "aria-hidden": "true"
    })
  });
}
function CookieConsent() {
  const [consent, setConsent] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(readConsent);
  const [modalOpen, setModalOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [draft, setDraft] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(DEFAULT_PREFS);
  const dialogRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const lastFocusRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  function openModal() {
    const current = readConsent();
    setDraft(current ? {
      analytics: current.analytics,
      marketing: current.marketing
    } : DEFAULT_PREFS);
    lastFocusRef.current = document.activeElement;
    setModalOpen(true);
  }
  function closeModal() {
    setModalOpen(false);
  }
  function save(prefs) {
    const value = writeConsent(prefs);
    applyConsent(value);
    setConsent(value);
    setModalOpen(false);
  }

  // delegación: abre el modal desde cualquier .js-bc-cookie-settings, aunque se agregue después
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    function onClick(e) {
      const trigger = e.target.closest && e.target.closest(OPEN_SELECTOR);
      if (!trigger) return;
      e.preventDefault();
      openModal();
    }
    document.addEventListener("click", onClick);
    return () => document.removeEventListener("click", onClick);
  }, []);

  // modal: foco inicial, Escape, focus trap, bloquear scroll y devolver el foco al cerrar
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!modalOpen) return;
    const dialog = dialogRef.current;
    const root = document.documentElement;
    const prevOverflow = root.style.overflow;
    root.style.overflow = "hidden";
    const focusables = getFocusable(dialog);
    (focusables[0] || dialog).focus();
    function onKeyDown(e) {
      if (e.key === "Escape") {
        e.preventDefault();
        closeModal();
        return;
      }
      if (e.key !== "Tab") return;
      const items = getFocusable(dialog);
      if (!items.length) return;
      const first = items[0];
      const last = items[items.length - 1];
      if (e.shiftKey && document.activeElement === first) {
        e.preventDefault();
        last.focus();
      } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault();
        first.focus();
      }
    }
    document.addEventListener("keydown", onKeyDown);
    return () => {
      document.removeEventListener("keydown", onKeyDown);
      root.style.overflow = prevOverflow;
      const last = lastFocusRef.current;
      if (last && typeof last.focus === "function" && document.contains(last)) last.focus();
    };
  }, [modalOpen]);
  function toggleDraft(key) {
    setDraft(prev => ({
      ...prev,
      [key]: !prev[key]
    }));
  }
  function renderCategory(cat) {
    const titleId = "bc-cookie-cat-" + cat.key;
    const descId = titleId + "-desc";
    const checked = cat.locked ? true : !!draft[cat.key];
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
      className: "bc-cookie-cat",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "bc-cookie-cat__head",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
          id: titleId,
          className: "bc-cookie-cat__title",
          children: cat.title
        }), cat.locked ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "bc-cookie-cat__always",
          children: "Always active"
        }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Toggle, {
          checked: checked,
          labelledBy: titleId,
          describedBy: descId,
          onChange: () => toggleDraft(cat.key)
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        id: descId,
        className: "bc-cookie-cat__desc",
        children: cat.description
      })]
    }, cat.key);
  }
  const showBanner = !consent && !modalOpen;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [showBanner && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("section", {
      className: "bc-cookie-banner",
      role: "region",
      "aria-label": "Cookie consent",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        className: "bc-cookie-banner__title",
        children: "We value your privacy"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        className: "bc-cookie-banner__text",
        children: ["We use cookies to keep our site working, understand how it\u2019s used, and measure our marketing. You can accept all cookies, reject non-essential ones, or choose your preferences.", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "/privacy-policy",
          children: "Privacy Policy"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "bc-cookie-banner__actions",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          type: "button",
          className: "bc-cookie-btn bc-cookie-btn--link",
          onClick: openModal,
          children: "Customize"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          type: "button",
          id: "gtm-cookie-reject",
          className: "bc-cookie-btn bc-cookie-btn--outline",
          onClick: () => save(DEFAULT_PREFS),
          children: "Reject All"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          type: "button",
          id: "gtm-cookie-accept",
          className: "bc-cookie-btn bc-cookie-btn--primary",
          onClick: () => save({
            analytics: true,
            marketing: true
          }),
          children: "Accept All"
        })]
      })]
    }), modalOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "bc-cookie-modal",
      onMouseDown: e => {
        if (e.target === e.currentTarget) closeModal();
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        ref: dialogRef,
        className: "bc-cookie-modal__dialog",
        role: "dialog",
        "aria-modal": "true",
        "aria-labelledby": "bc-cookie-modal-title",
        "aria-describedby": "bc-cookie-modal-intro",
        tabIndex: "-1",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "bc-cookie-modal__header",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              className: "bc-cookie-modal__eyebrow",
              children: "Privacy"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h2", {
              id: "bc-cookie-modal-title",
              className: "bc-cookie-modal__title",
              children: "Cookie Settings"
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            className: "bc-cookie-modal__close",
            "aria-label": "Close cookie settings",
            onClick: closeModal,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              viewBox: "0 0 24 24",
              fill: "none",
              stroke: "currentColor",
              strokeWidth: "2",
              strokeLinecap: "round",
              "aria-hidden": "true",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M6 6l12 12M18 6L6 18"
              })
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "bc-cookie-modal__body",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            id: "bc-cookie-modal-intro",
            className: "bc-cookie-modal__intro",
            children: ["Choose which cookies you allow. You can change these settings at any time from the \u201CCookie Settings\u201D link in the footer. Learn more in our", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/privacy-policy",
              children: "Privacy Policy"
            }), "."]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "bc-cookie-cats",
            children: CATEGORIES.map(renderCategory)
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "bc-cookie-modal__footer",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            className: "bc-cookie-btn bc-cookie-btn--outline-dark",
            onClick: () => save(DEFAULT_PREFS),
            children: "Reject All"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            className: "bc-cookie-btn bc-cookie-btn--outline-dark",
            onClick: () => save({
              analytics: true,
              marketing: true
            }),
            children: "Accept All"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            id: "gtm-cookie-save",
            className: "bc-cookie-btn bc-cookie-btn--primary",
            onClick: () => save(draft),
            children: "Save Preferences"
          })]
        })]
      })
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (CookieConsent);

/***/ },

/***/ "./src/scripts/Shared.js"
/*!*******************************!*\
  !*** ./src/scripts/Shared.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   CITY_SHORT: () => (/* binding */ CITY_SHORT),
/* harmony export */   EMAIL: () => (/* binding */ EMAIL),
/* harmony export */   ISOTIPO: () => (/* binding */ ISOTIPO),
/* harmony export */   IconFacebook: () => (/* binding */ IconFacebook),
/* harmony export */   IconGoogle: () => (/* binding */ IconGoogle),
/* harmony export */   IconInstagram: () => (/* binding */ IconInstagram),
/* harmony export */   IconMail: () => (/* binding */ IconMail),
/* harmony export */   IconPhone: () => (/* binding */ IconPhone),
/* harmony export */   IconPin: () => (/* binding */ IconPin),
/* harmony export */   IconShield: () => (/* binding */ IconShield),
/* harmony export */   IconTikTok: () => (/* binding */ IconTikTok),
/* harmony export */   IconYelp: () => (/* binding */ IconYelp),
/* harmony export */   LOCATIONS: () => (/* binding */ LOCATIONS),
/* harmony export */   NAV_LOGO: () => (/* binding */ NAV_LOGO),
/* harmony export */   PHONE_DISPLAY: () => (/* binding */ PHONE_DISPLAY),
/* harmony export */   PHONE_HREF: () => (/* binding */ PHONE_HREF),
/* harmony export */   SERVICES: () => (/* binding */ SERVICES),
/* harmony export */   SOCIAL_ICON_MAP: () => (/* binding */ SOCIAL_ICON_MAP),
/* harmony export */   SOCIAL_LINKS: () => (/* binding */ SOCIAL_LINKS)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ================================================================
// shared.js — todo lo que comparten Navbar.js y Footer.js:
// datos (servicios, zonas, redes, contacto) e íconos SVG inline.
// Un solo archivo a propósito, para no fragmentar el theme en JS de más.
// ================================================================

const SERVICES = [{
  label: "Xeriscaping & Desert Design",
  href: "/services/xeriscaping-desert-design"
}, {
  label: "Grass & Turf Installation",
  href: "/services/grass-and-turf-installation"
}, {
  label: "Hardscaping",
  href: "/services/hardscaping"
}, {
  label: "Irrigation Systems",
  href: "/services/irrigation-systems"
}, {
  label: "Lightscape Installation",
  href: "/services/lightscape-installation"
}, {
  label: "Tree Services",
  href: "/services/tree-services"
}, {
  label: "Lawn & Garden Maintenance",
  href: "/services/lawn-and-garden-maintenance"
}, {
  label: "Concrete & Retaining Walls",
  href: "/services/concrete-and-retaining-walls"
}];
const LOCATIONS = [{
  label: "Goodyear, AZ",
  href: "/location/goodyear-az"
}, {
  label: "Waddell, AZ",
  href: "/location/waddell-az"
}, {
  label: "Fountain Hills, AZ",
  href: "/location/fountain-hills-az"
}, {
  label: "Rio Verde, AZ",
  href: "/location/rio-verde-az"
}, {
  label: "Scottsdale, AZ",
  href: "/location/scottsdale-az"
}, {
  label: "Phoenix, AZ",
  href: "/location/phoenix-az"
}, {
  label: "Tempe, AZ",
  href: "/location/tempe-az"
}, {
  label: "Mesa, AZ",
  href: "/location/mesa-az"
}, {
  label: "Gilbert, AZ",
  href: "/location/gilbert-az"
}, {
  label: "Paradise Valley, AZ",
  href: "/location/paradise-valley-az"
}, {
  label: "Arcadia, AZ",
  href: "/location/arcadia-az"
}];
const SOCIAL_LINKS = [{
  label: "Facebook",
  href: "https://www.facebook.com/bclandscapingandhardscape/",
  icon: "facebook"
}, {
  label: "Instagram",
  href: "https://www.instagram.com/bc_landscapingllc/",
  icon: "instagram"
}, {
  label: "TikTok",
  href: "https://www.tiktok.com/@bclandscaping",
  icon: "tiktok"
}, {
  label: "Yelp",
  href: "https://www.yelp.com/biz/bc-landscaping-and-hardscape-phoenix",
  icon: "yelp"
}, {
  label: "Google Reviews",
  href: "https://share.google/zZ0sZSDsEjN143mQX",
  icon: "google"
}, {
  label: "BBB",
  href: "https://www.bbb.org/us/az/phoenix/profile/landscape-maintenance/bc-landscaping-hardscape-llc-1126-1000131043",
  icon: "bbb"
}];
const NAV_LOGO = "/wp-content/uploads/2026/07/BC_Imagotipo_horizontal-scaled.png";
const ISOTIPO = "/wp-content/uploads/2026/07/BC_Isotipo-scaled.png";
const PHONE_DISPLAY = "(480) 229-4950";
const PHONE_HREF = "tel:+14802294950";
const EMAIL = "info@bclandscapingaz.com";
const CITY_SHORT = "Phoenix, AZ";

// ---------------- Íconos SVG inline (sin dependencias) ----------------

function IconFacebook(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    className: props.className,
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M15 8.5h2.5V5.2c-.43-.06-1.9-.2-3.62-.2-3.58 0-6.03 2.24-6.03 6.36V15H4.4v3.7h3.45V29h3.9V18.7h3.32l.53-3.7h-3.85v-3.2c0-1.07.29-1.8 1.85-1.8Z"
    })
  });
}
function IconInstagram(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.7",
    className: props.className,
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      x: "3.5",
      y: "3.5",
      width: "17",
      height: "17",
      rx: "4.5"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "12",
      cy: "12",
      r: "4.1"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "16.9",
      cy: "7.1",
      r: "0.9",
      fill: "currentColor",
      stroke: "none"
    })]
  });
}
function IconTikTok(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    className: props.className,
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M15.5 3.2c.55 1.9 1.86 3.24 3.9 3.5v2.72c-1.42.06-2.7-.4-3.9-1.24v6.4c0 3.34-2.5 5.4-5.35 5.4-2.8 0-5.35-2-5.35-5.32 0-3.3 2.7-5.3 5.35-5.3.35 0 .78.03 1.1.1v2.85a2.7 2.7 0 0 0-1.1-.22 2.5 2.5 0 0 0-2.5 2.55 2.5 2.5 0 0 0 2.5 2.55c1.42 0 2.62-1.03 2.62-2.9V3.2Z"
    })
  });
}
function IconYelp(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    className: props.className,
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M11.1 3.4c-.32-.1-.66.1-.72.43L9 11.2c-.06.4.28.75.68.66l4.9-1.1c.4-.1.55-.58.28-.88-1.1-1.2-2.5-2.3-3.75-6.4Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M8.4 13.1c.2-.34.66-.4.94-.14l3.55 3.3c.3.28.24.76-.12.96l-4.4 2.44c-.37.2-.82-.06-.85-.48l-.3-5.4c-.02-.28.06-.5.18-.68Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M15.2 12.5c-.14-.35.06-.75.44-.83l5.2-1.14c.4-.1.77.27.65.66l-1.5 4.9c-.12.4-.63.5-.9.18l-3.9-3.77Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M13.4 14.6c.32-.16.72-.02.86.3l2.28 4.9c.17.38-.13.8-.54.75l-5.28-.6c-.4-.05-.6-.5-.38-.83l3.06-4.52Z"
    })]
  });
}
function IconGoogle(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    fill: "currentColor",
    className: props.className,
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21.6 12.23c0-.7-.06-1.36-.18-2H12v3.8h5.4a4.6 4.6 0 0 1-2 3.02v2.5h3.24c1.9-1.75 3-4.32 3-7.32Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 22c2.7 0 4.96-.9 6.62-2.44l-3.24-2.5c-.9.6-2.05.96-3.38.96-2.6 0-4.8-1.76-5.58-4.12H3.06v2.6A10 10 0 0 0 12 22Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6.42 13.9a5.98 5.98 0 0 1 0-3.8V7.5H3.06a10 10 0 0 0 0 9l3.36-2.6Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 5.98c1.47 0 2.8.5 3.83 1.5l2.87-2.87A9.96 9.96 0 0 0 12 2a10 10 0 0 0-8.94 5.5l3.36 2.6C7.2 7.74 9.4 5.98 12 5.98Z"
    })]
  });
}
function IconShield(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.7",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    className: props.className,
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 3.2 5 5.8v5.4c0 4.6 3 7.9 7 9.6 4-1.7 7-5 7-9.6V5.8L12 3.2Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "m9.2 12.1 2 2 3.6-4"
    })]
  });
}
function IconPhone(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.8",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    className: props.className,
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6.6 10.8c1.3 2.6 3.4 4.7 6 6l2-2c.25-.25.6-.33.9-.2 1 .34 2.1.53 3.2.53.5 0 .9.4.9.9v3.1c0 .5-.4.9-.9.9C10.4 20 4 13.6 4 5.5c0-.5.4-.9.9-.9H8c.5 0 .9.4.9.9 0 1.1.19 2.2.53 3.2.12.3.05.65-.2.9l-2 2Z"
    })
  });
}
function IconMail(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.8",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    className: props.className,
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      x: "3.5",
      y: "5.5",
      width: "17",
      height: "13",
      rx: "2"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "m4.5 7 7.5 6 7.5-6"
    })]
  });
}
function IconPin(props) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.8",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    className: props.className,
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 21.5s7-6.4 7-11.7A7 7 0 0 0 5 9.8c0 5.3 7 11.7 7 11.7Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "12",
      cy: "9.8",
      r: "2.4"
    })]
  });
}
const SOCIAL_ICON_MAP = {
  facebook: IconFacebook,
  instagram: IconInstagram,
  tiktok: IconTikTok,
  yelp: IconYelp,
  google: IconGoogle,
  bbb: IconShield
};

/***/ },

/***/ "./src/scripts/navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ initNavbar)
/* harmony export */ });
function initNavbar() {
  const body = document.body;
  const header = document.querySelector(".js-bc-header");
  const navToggle = document.querySelector(".js-bc-nav-toggle");
  const mobilePanel = document.querySelector(".js-bc-mobile-panel");
  const desktopDropdowns = document.querySelectorAll(".js-bc-dropdown");
  const desktopDropdownToggles = document.querySelectorAll(".js-bc-dropdown-toggle");
  const mobileGroups = document.querySelectorAll(".js-bc-mobile-group");
  const mobileGroupToggles = document.querySelectorAll(".js-bc-mobile-group-toggle");
  if (!header) return;
  const closeDesktopDropdowns = () => {
    desktopDropdowns.forEach(item => {
      item.classList.remove("is-open");
      const toggle = item.querySelector(".js-bc-dropdown-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileGroups = () => {
    mobileGroups.forEach(group => {
      group.classList.remove("is-open");
      const toggle = group.querySelector(".js-bc-mobile-group-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.setAttribute("hidden", "");
    navToggle.setAttribute("aria-expanded", "false");
    body.classList.remove("bc-mobile-open");
    closeMobileGroups();
    publishHeaderHeight();
  };
  const openMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.removeAttribute("hidden");
    navToggle.setAttribute("aria-expanded", "true");
    body.classList.add("bc-mobile-open");
    publishHeaderHeight();
  };
  const toggleMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    const isExpanded = navToggle.getAttribute("aria-expanded") === "true";
    if (isExpanded) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  };
  const handleHeaderState = () => {
    if (window.scrollY > 16) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  };
  const publishHeaderHeight = () => {
    document.documentElement.style.setProperty("--bc-nav-h", header.offsetHeight + "px");
  };
  if (navToggle && mobilePanel) {
    navToggle.addEventListener("click", toggleMobileMenu);
  }
  desktopDropdownToggles.forEach(toggle => {
    toggle.addEventListener("click", event => {
      event.preventDefault();
      const parent = toggle.closest(".js-bc-dropdown");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeDesktopDropdowns();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  mobileGroupToggles.forEach(toggle => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".js-bc-mobile-group");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeMobileGroups();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  document.addEventListener("click", event => {
    const clickedInsideDesktopDropdown = event.target.closest(".js-bc-dropdown");
    if (!clickedInsideDesktopDropdown) {
      closeDesktopDropdowns();
    }
    const clickedInsideMobilePanel = event.target.closest(".js-bc-mobile-panel");
    const clickedToggle = event.target.closest(".js-bc-nav-toggle");
    if (mobilePanel && navToggle && !mobilePanel.hasAttribute("hidden") && !clickedInsideMobilePanel && !clickedToggle) {
      closeMobileMenu();
    }
  });
  document.addEventListener("keydown", event => {
    if (event.key === "Escape") {
      closeDesktopDropdowns();
      closeMobileMenu();
    }
  });
  handleHeaderState();
  publishHeaderHeight();
  window.addEventListener("scroll", handleHeaderState);
  window.addEventListener("resize", () => {
    publishHeaderHeight();
    if (window.innerWidth > 980) {
      closeMobileMenu();
    }
  });
}

/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom/client"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	const __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		const cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		const module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			const e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			const getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter/value functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			if(Array.isArray(definition)) {
/******/ 				var i = 0;
/******/ 				while(i < definition.length) {
/******/ 					var key = definition[i++];
/******/ 					var binding = definition[i++];
/******/ 					if(!__webpack_require__.o(exports, key)) {
/******/ 						if(binding === 0) {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, value: definition[i++] });
/******/ 						} else {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, get: binding });
/******/ 						}
/******/ 					} else if(binding === 0) { i++; }
/******/ 				}
/******/ 			} else {
/******/ 				for(var key in definition) {
/******/ 					if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 						Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 					}
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.hasOwn(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
let __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "react-dom/client");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom_client__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/navbar */ "./src/scripts/navbar.js");
/* harmony import */ var _scripts_ContactForm__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/ContactForm */ "./src/scripts/ContactForm.js");
/* harmony import */ var _scripts_CookieConsent__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/CookieConsent */ "./src/scripts/CookieConsent.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__);







// Los formularios se montan de inmediato (este bundle va al final del <body>, el DOM ya existe)
// y de forma síncrona, para que estén en el DOM antes de que los scripts de cada página
// busquen .bc-tilt / .bc-magnetic en su DOMContentLoaded.

document.querySelectorAll(".js-bc-contact-form").forEach(el => {
  const root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(el);
  (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.flushSync)(() => {
    root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_3__["default"], {
      variant: el.dataset.variant,
      id: el.dataset.id
    }));
  });
});

// Banner / modal de cookies (punto de montaje en footer.php)
const cookieConsentEl = document.getElementById("bc-cookie-consent");
if (cookieConsentEl) {
  (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(cookieConsentEl).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_CookieConsent__WEBPACK_IMPORTED_MODULE_4__["default"], {}));
}
document.addEventListener("DOMContentLoaded", function () {
  (0,_scripts_navbar__WEBPACK_IMPORTED_MODULE_2__["default"])();
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map