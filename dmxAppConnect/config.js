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
    }
  }
});
