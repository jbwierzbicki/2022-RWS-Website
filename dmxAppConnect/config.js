dmx.config({
  "trakingph3": {
    "query": [
      {
        "type": "text",
        "name": "load_ref"
      }
    ],
    "load_ref": {
      "meta": null,
      "outputType": "text"
    },
    "tracking_api": [
      {
        "type": "array",
        "name": "data",
        "sub": [
          {
            "type": "object",
            "name": "attributes",
            "sub": [
              {
                "type": "text",
                "name": "type"
              },
              {
                "type": "text",
                "name": "url"
              }
            ]
          },
          {
            "type": "text",
            "name": "Load_Reference__c"
          },
          {
            "type": "text",
            "name": "FreightTM__Trailer__c"
          },
          {
            "type": "text",
            "name": "PO__c"
          },
          {
            "type": "text",
            "name": "Pickup_Name_Address__c"
          },
          {
            "type": "text",
            "name": "Delivery_Name_Address__c"
          },
          {
            "type": "object",
            "name": "Location__c",
            "sub": [
              {
                "type": "number",
                "name": "latitude"
              },
              {
                "type": "number",
                "name": "longitude"
              }
            ]
          },
          {
            "type": "text",
            "name": "Id"
          }
        ]
      },
      {
        "type": "object",
        "name": "headers",
        "sub": [
          {
            "type": "text",
            "name": "cache-control"
          },
          {
            "type": "text",
            "name": "content-encoding"
          },
          {
            "type": "text",
            "name": "content-type"
          },
          {
            "type": "text",
            "name": "date"
          },
          {
            "type": "text",
            "name": "strict-transport-security"
          },
          {
            "type": "text",
            "name": "vary"
          }
        ]
      }
    ]
  },
  "index": {
    "data_detail1": {
      "meta": null,
      "outputType": "object"
    },
    "repeat1": {
      "meta": [
        {
          "name": "containerId",
          "type": "text"
        },
        {
          "name": "rowClass",
          "type": "text"
        },
        {
          "name": "colClass",
          "type": "text"
        },
        {
          "name": "h100RowClass",
          "type": "text"
        },
        {
          "name": "moduleCardClass",
          "type": "text"
        },
        {
          "name": "containerClass",
          "type": "text"
        },
        {
          "name": "g0RowClass",
          "type": "text"
        },
        {
          "name": "colLg5Class",
          "type": "text"
        },
        {
          "name": "slideshowId",
          "type": "text"
        },
        {
          "name": "slideshowClass",
          "type": "text"
        },
        {
          "name": "delay",
          "type": "text"
        },
        {
          "name": "noAutostart",
          "type": "boolean"
        },
        {
          "name": "showPaging",
          "type": "boolean"
        },
        {
          "name": "slides",
          "type": "array",
          "sub": [
            {
              "name": "alt",
              "type": "text"
            },
            {
              "name": "id",
              "type": "text"
            },
            {
              "name": "url",
              "type": "text"
            }
          ]
        },
        {
          "name": "title",
          "type": "text"
        },
        {
          "name": "colorOptions",
          "type": "array",
          "sub": [
            {
              "name": "id",
              "type": "text"
            },
            {
              "name": "name",
              "type": "text"
            },
            {
              "name": "color",
              "type": "text"
            }
          ]
        },
        {
          "name": "description",
          "type": "text"
        },
        {
          "name": "addToCartButtonId",
          "type": "text"
        },
        {
          "name": "viewCartButtonId",
          "type": "text"
        }
      ],
      "outputType": "object"
    },
    "repeat2": {
      "meta": [
        {
          "name": "id",
          "type": "text"
        },
        {
          "name": "name",
          "type": "text"
        },
        {
          "name": "color",
          "type": "text"
        }
      ],
      "outputType": "array"
    }
  }
});
