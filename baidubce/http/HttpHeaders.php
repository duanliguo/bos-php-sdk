<?php
/*
* Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
* the License. You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
* an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
* specific language governing permissions and limitations under the License.
*/

namespace baidubce\http;

/**
 * This module defines string constants for HTTP headers
 */
class HttpHeaders {
    // Standard HTTP Headers

    const AUTHORIZATION = "Authorization";
    const CONTENT_DISPOSITION = "Content-Disposition";
    const CONTENT_ENCODING = "Content-Encoding";
    const CONTENT_LENGTH = "Content-Length";
    const CONTENT_MD5 = "Content-MD5";
    const CONTENT_RANGE = "Content-Range";
    const CONTENT_TYPE = "Content-Type";
    const DATE = "Date";
    const ETAG = "ETag";
    const EXPIRES = "Expires";
    const EXPECT = "Expect";
    const TRANSFER_ENCODING = "Transfer-Encoding";
    const HOST = "Host";
    const LAST_MODIFIED = "Last-Modified";
    const RANGE = "Range";
    const SERVER = "Server";
    const USER_AGENT = "User-Agent";

    // BCE Common HTTP Headers
    const BCE_PREFIX = "x-bce-";
    const BCE_ACL = "x-bce-acl";
    const BCE_CONTENT_SHA256 = "x-bce-content-sha256";
    const BCE_COPY_METADATA_DIRECTIVE = "x-bce-metadata-directive";
    const BCE_COPY_SOURCE = "x-bce-copy-source";
    const BCE_COPY_SOURCE_IF_MATCH = "x-bce-copy-source-if-match";
    const BCE_DATE = "x-bce-date";
    const BCE_USER_METADATA_PREFIX = "x-bce-meta-";
    const BCE_REQUEST_ID = "x-bce-request-id";

    // BOS HTTP Headers
    const BOS_DEBUG_ID = "x-bce-bos-debug-id";
}




/* vim: set ts=4 sw=4 sts=4 tw=120: */
